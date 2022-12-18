<div>
    
    <form wire:submit.prevent="update">
        @csrf
        <!-- <p>wire:submit.prevent="submit"</p> -->
        <!-- method="post" action="{{ route('shopping.store') }}" enctype="multipart/form-data" -->
        @if ($currentStep == 1)

        <!-- STEP 1 -->
        <div class="step-one">
            <div class="form-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#3096fd" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312V4.002Z"/>
                </svg>
                <span style="color:#3096fd">Overview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-2-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                </svg>
                Files
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-3-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                </svg>
                Submission
                <hr>
            </div>
            <div class="card col-md-6 top-50 start-50 translate-middle-x" style="margin-top:50px">
                <div class="card-body m-3">
                    <div class="form-group">
                        <div>Template Name <input type="text" name="template_name" class="form-control" wire:model="template_name"></div>
                        <span class="text-danger">@error('template_name'){{ $message }}@enderror</span><br>
                        <!-- <label for="category">Category</label>
                        <select name="category" class="form-control" wire:model="category">
                            <option value="" selected>Choose category</option>
                            <option value="content writer">Content Writer</option>
                            <option value="designer">Designer</option>
                            <option value="game developer">Game Developer</option>
                            <option value="photographer">Photographer</option>
                            <option value="web developer">Web Developer</option>
                        </select><br> -->
                        <div>Description <input type="textarea" name="description" class="form-control" wire:model="description"></div>
                        <span class="text-danger">@error('description'){{ $message }}@enderror</span><br>
                        <div>Price <input type="text" name="price" class="form-control" wire:model="price">
                        <span class="text-danger">@error('price'){{ $message }}@enderror</span></div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        @endif

        @if ($currentStep == 2)

        <!-- STEP 2 -->
        <div class="step-two">
            <div class="form-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#3096fd" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312V4.002Z"/>
                </svg>
                <a wire:click="toStepOne()"><span style="color:#3096fd">Overview</span></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#3096fd" class="bi bi-2-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                </svg>
                <span style="color:#3096fd">Files</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-3-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                </svg>
                Submission
                <hr>
            </div>
            <div class="card col-md-6 top-50 start-50 translate-middle-x" style="margin-top:50px">
                <div class="card-body m-3">
                    <div class="form-group">
                        <div class="form-group mb-4">
                            <label for="picture"> Upload Foto</label>
                            <input type="file" class="form-control" name="picture" wire:model="picture">
                            <span class="text-danger">@error('picture'){{ $message }}@enderror</span><br>

                            <input type="file" class="form-control" name="picture2" wire:model="picture2">
                            <span class="text-danger">@error('picture'){{ $message }}@enderror</span><br>

                            <input type="file" class="form-control" name="picture3" wire:model="picture3">
                            <span class="text-danger">@error('picture'){{ $message }}@enderror</span><br>

                            <input type="file" class="form-control" name="picture4" wire:model="picture4">
                            <span class="text-danger">@error('picture'){{ $message }}@enderror</span><br>

                            <label for="picture"> Upload File</label>
                            <input type="file" class="form-control" name="document" wire:model="document">
                            <span class="text-danger">@error('document'){{ $message }}@enderror</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        @endif

        @if ($currentStep == 3)

        <!-- STEP 3 -->
        <div class="step-three">
            <div class="form-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#3096fd" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312V4.002Z"/>
                </svg>
                <!-- <span style="color: #3096fd">Overview</span> -->
                <a wire:click="toStepOne()"><span style="color:#3096fd">Overview</span></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#3096fd" class="bi bi-2-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                </svg>
                <a wire:click="toStepTwo()"><span style="color:#3096fd">Files</span></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#3096fd" class="bi bi-3-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                </svg>
                <span style="color:#3096fd">Submission</span>
                <hr>
            </div>
            <div class="card col-md-6 top-50 start-50 translate-middle-x" style="margin-top:50px">
                <div class="card-body m-3">
                    <div class="form-group">
                        Preview
                        <br>
                        <table class="table">
                            <tr>
                                <td><img src="{{ asset('thumb/'.$namafile) }}"></td>
                                <td>{{ $template_name }}</td>
                                <td>{{ $price }}</td>
                            </tr>
                        </table>
                        <!-- <label for="checkbox">
                            <input type="checkbox" wire:model="checkbox"> I agree
                        </label> -->
                    </div>
                </div>
            </div>
        </div>

        @endif

        <div class="col-md-6 position-relative start-50 translate-middle-x">
            <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
                <div></div>
                @if ($currentStep == 1 || $currentStep == 2)
                <button type="button" class="btn btn-sm btn-primary" wire:click="increaseStep()">Save & Continue</button>
                @endif
                @if ($currentStep == 3)
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                @endif
            </div>
        </div>
        
    </form>
</div>

