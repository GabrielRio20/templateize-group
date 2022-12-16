<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Tes Feedback</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="aos-by-red.css">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   </head>
   <body>
   <div class="container" data-aos="zoom-in" data-aos-duration="1000">
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
                 {{-- <br /> --}}
                 {{-- <textarea rows="8" cols="80" required></textarea> --}}
                 {{-- <br/> --}}
                 <div class="underline"></div>
                 <label for="">Your Message</label>
                 {{-- <br /> --}}
              </div>
           </div>
           <div class="d-flex justify-content-center mt-5 mb-5">
            <button type="submit" class="btn btn-primary">Submit</button>
           </div>
           
        </form>
     </div>
     </div>
    </div>
     <br><br><br><br><br>

   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script>
   </body>
</html>