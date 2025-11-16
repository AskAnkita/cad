@extends('layouts.app')

@section('content')



    <!-- 
      This is the main section for the single course.
      All class names are prefixed with 'single-course-'
    -->
    <section class="single-course-section">
        <div class="single-course-container">
            
            <!-- Column 1: Course Image -->
            <div class="single-course-image-wrapper">
                <img src="/assets/advS.png" alt="Advanced Data Science Course">
            </div>

            <!-- Column 2: Course Details -->
            <div class="single-course-details-wrapper">
                <h2 class="single-course-title">Advanced Stitching (3 Months)</h2>
                
                <div class="single-course-meta">
                    <span class="single-course-meta-item" id="single-course-duration">
                        <strong>Duration:</strong> 12 Weeks
                    </span>
                    <span class="single-course-meta-item" id="single-course-format">
                        <strong>Format:</strong> Online, Self-Paced
                    </span>
                    <span class="single-course-meta-item" id="single-course-level">
                        <strong>Level:</strong> Advanced
                    </span>
                </div>

                <div class="single-course-description">
                    <p>
    Take your stitching skills to the next level with our Advance Stitching Course. 
    This program is designed for learners who already understand basic stitching techniques 
    and want to master professional-level garment construction, finishing, and pattern precision.
        You will learn advanced drafting, cutting, and sewing methods used in the fashion industry. 
        Topics include blouse variations, designer suits, kurti finishing, collar and cuff techniques, 
        zipper placements, lining work, garment fitting adjustments, and handling complex fabrics. 
        The course emphasizes accuracy, creativity, and professional finishing.  
        By the end of the program, you’ll be able to create custom-fit garments with industry-level 
        quality and confidence for clients or your own boutique.
    
</p>
                    <!-- This button triggers the JavaScript -->
                   
                </div>

                <div class="single-course-footer">
                  
                    <a href="/contact.html" class="single-course-enroll-btn">Enroll Now</a>
                </div>
            </div>

        </div>
    </section>

<section class="single-batch-scope single-batch-section">
    <div class="container">
      <h2 class="section-title">more courses</h2>
      <div class="single-batch-container">
        <div class="single-batch-card" style="background-image: url('/assets/diploma.jpg')">
          <h3>Diploma course</h3>
          <p>Admission Ongoing</p>
    
        </div>

        <div class="single-batch-card" style="background-image: url('/assets/certificate.jpg')">
          <h3>Certificate course</h3>
          <p>Admission Ongoing</p>
        </div>

        <div class="single-batch-card" style="background-image: url('/assets/fd.jpg')">
          <h3>Fashion Design</h3>
          <p>Admission Ongoing</p>
         
        </div>
      </div>
    </div>
  </section>

      <!-- ================= FOOTER ================= -->


  <div class="footer-bottom" style="text-align: center; margin-top: 30px; border-top: 1px solid #374151; padding-top: 15px; font-size: 13px;">
    <p>© 2025 Capital Academy of Design | All Rights Reserved</p>
    <p>Designed with ❤️ by CAD Web Team</p>
  </div>
</footer>
@endsection