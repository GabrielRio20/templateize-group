<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Shopping;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
Use File;

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

        $document = $this->document;
        // $namadoc = 'FT'.date('Ymdhis').'.'.$this->$document->getClientOriginalExtension();
        $namadoc = time();
        // Storage::putFile('docs/', $namadoc, $this->document);
        // $document->move('public/docs/', $namadoc);
        // $document->storeAs('docs/', $namadoc, $document);
        // $document->storeAs('docs', 'namadoc');
        // $document->store('public/docs');
        // $document->storeAs('public/docs', 'namadoc');
        Storage::disk('local')->put('docs/'. $namadoc, $document);
        // Storage::put('docs/', $namadoc, $this->document);

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

