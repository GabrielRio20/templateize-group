<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Tes Feedback</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
   <div class="container">
    <div class="second">
    <div class="third">   
        <div class="text">Feedback</div>
        <form method="post" action="{{ route('feedback') }}" >
         @csrf
           <div class="form-row">
              <div class="input-data">
                 <input type="text" name="name">
                 <div class="underline"></div>
                 <label for="">Your Name</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 <input type="text" name="email">
                 <div class="underline"></div>
                 <label for="">Your Email</label>
              </div>
           </div>
           <div class="form-row">
            <div class="input-data">
               <input type="text" name="subject">
               <div class="underline"></div>
               <label for="">Your Subject</label>
            </div>
            </div>
           <div class="form-row">
              <div class="input-data textarea">
                 <textarea rows="8" cols="80" name="message"></textarea>
                 <br />
                 <div class="underline"></div>
                 <label for="">Your Message</label>
                 <br />
               
              </div>
           </div>
           <div class="d-flex justify-content-center mt-5">
            <button type="submit" class="btn btn-primary">Submit</button>
           </div>
           
        </form>
     </div>
     </div>
    </div>
     <br><br><br><br><br>
   </body>
</html>