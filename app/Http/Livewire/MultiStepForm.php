<?php

namespace App\Http\Livewire;

use ZipArchive;
use Livewire\Component;
use App\Models\Shopping;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class MultiStepForm extends Component
{
    use WithFileUploads;

    public $template_name;
    public $category;
    public $description;
    public $price;
    public $picture;
    public $document;
    public $checkbox;
    public $namafile;

    public $totalSteps = 3;
    public $currentStep = 1;

    public function mount() {
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function increaseStep() {
        $this->resetErrorbag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function toStepOne() {
        $this->resetErrorbag();
        $this->currentStep = 1;
    }

    public function toStepTwo() {
        $this->resetErrorbag();
        $this->currentStep = 2;
    }

    public function toStepThree() {
        $this->resetErrorbag();
        $this->currentStep = 3;
    }

    public function validateData() {
        if($this->currentStep == 1) {
            $this->validate([
                'template_name'=>'required|string',
                'description'=>'required|string',
                'price'=>'required|string'
            ]);
        } elseif($this->currentStep == 2) {
            $this->validate([
                'picture'=>'required',
                'document'=>'required'
            ]);
        }
    }

    public function submit() {
        $picture = $this->picture;
        $namafile = time().'.'.$picture->getClientOriginalExtension();
        Image::make($this->picture)->resize(800, 450)->save('thumb/'.$namafile);

        $zip = new ZipArchive();
        $document = $this->document;
        $namadoc = time();
        $name = $this->template_name;
        
        Storage::disk('local')->put('docs/'. $namadoc, $document);

        // $file_name = $namadoc.'.zip';
        $file_name = $name.'.zip';

        if ($zip->open(storage_path('docs/'.$file_name), ZipArchive::CREATE) == TRUE) {
            $files = File::files(storage_path('app/docs/'.$namadoc));

            foreach ($files as $value){
                $filename = basename($value);
                $zip->addFile($value, $filename);
            }
            $zip->close();
            // return Storage::disk('local')->put('docs/', $file_name);
        }

        $values = array(
            "template_name"=>$this->template_name,
            "description"=>$this->description,
            "price"=>$this->price,
            "picture"=>$namafile,
            "document"=>$namadoc
        );

        Shopping::insert($values);
        $this->reset();
        $this->currentStep = 1;
    }
}

