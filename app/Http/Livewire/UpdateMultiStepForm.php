<?php

namespace App\Http\Livewire;

use Livewire\Component;
use ZipArchive;
use App\Models\Shopping;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UpdateMultiStepForm extends Component
{
    use WithFileUploads;

    public $template_name;
    public $category;
    public $description;
    public $price;
    public $picture;
    public $picture2;
    public $picture3;
    public $picture4;
    public $document;
    public $checkbox;
    public $namafile;
    public $uploader;

    public $template;

    public $totalSteps = 3;
    public $currentStep = 1;

    public function mount($template) {
        $this->currentStep = 1;
        $this->template = $template;
        $this->template_name = $template->template_name;
        $this->description = $template->description;
        $this->price = $template->price;
        $this->picture = $template->picture;
        $this->picture2 = $template->picture2;
        $this->picture3 = $template->picture3;
        $this->picture4 = $template->picture4;
        $this->document = $template->document;
    }

    public function render()
    {
        return view('livewire.update-multi-step-form');
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
                'picture2'=>'required',
                'picture3'=>'required',
                'picture4'=>'required',
                'document'=>'required'
            ]);
        }
    }

    public function update() {
        $picture = $this->picture;
        $picture2 = $this->picture2;
        $picture3 = $this->picture3;
        $picture4 = $this->picture4;
        $template = $this->template;

        if ($picture != $template->picture) {
            $namafile = time().'.'.$picture->getClientOriginalExtension();
            Image::make($this->picture)->resize(800, 450)->save('thumb/'.$namafile);
            $picture = $namafile;
        }

        if ($picture2 != $template->picture2) {
            $namafile2 = time().'.'.$picture2->getClientOriginalExtension();
            Image::make($this->picture2)->resize(800, 450)->save('thumb/'.$namafile2);
            $picture2 = $namafile2;
        }

        if ($picture3 != $template->picture3) {
            $namafile3 = time().'.'.$picture3->getClientOriginalExtension();
            Image::make($this->picture3)->resize(800, 450)->save('thumb/'.$namafile3);
            $picture3 = $namafile3;
        }

        if ($picture4 != $template->picture4) {
            $namafile4 = time().'.'.$picture4->getClientOriginalExtension();
            Image::make($this->picture4)->resize(800, 450)->save('thumb/'.$namafile4);
            $picture4 = $namafile4;
        }

        $document = $this->document;

        if ($document != $template->document) {
            $zip = new ZipArchive();
            $namadoc = time();
            $name = $this->template_name;
            
            Storage::disk('local')->put('docs/'. $namadoc, $document);

            $file_name = $name.'.zip';

            if ($zip->open(storage_path('docs/'.$file_name), ZipArchive::CREATE) == TRUE) {
                $files = File::files(storage_path('app/docs/'.$namadoc));

                foreach ($files as $value){
                    $filename = basename($value);
                    $zip->addFile($value, $filename);
                }
                $zip->close();
            }

            $document = $namadoc;
        }

        $uploader = Auth::id();

        $values = array(
            "template_name"=>$this->template_name,
            "description"=>$this->description,
            "price"=>$this->price,
            "picture"=>$picture,
            "picture2"=>$picture2,
            "picture3"=>$picture3,
            "picture4"=>$picture4,
            "document"=>$document,
            "uploader"=>$uploader
        );

        Shopping::where('id', $template->id)->update($values);
        $this->reset();
        $this->currentStep = 1;

        redirect()->route('contributor.mytemp');
    }
}
