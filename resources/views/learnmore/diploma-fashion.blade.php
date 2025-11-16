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
                <img src="/assets/dif.png" alt="Diploma in Fashion Design Course">
            </div>

            <!-- Column 2: Course Details -->
            <div class="single-course-details-wrapper">
                <h2 class="single-course-title">Diploma in Fashion Design (1 Year)</h2>
                
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
    The Diploma in Fashion Design is a comprehensive program designed to help students build strong creative and technical skills in the fashion industry. 
    This course covers sketching, pattern making, garment construction, fabric knowledge, surface ornamentation, draping, fashion illustration, and portfolio development. 
    Students learn to design and create complete outfits, understand current fashion trends, and develop their own unique style. 
    With practical workshops and project-based learning, this diploma prepares you for careers in fashion designing, boutique management, tailoring, styling, and freelance work.
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
n>

  <!-- ================= FOOTER ================= -->
@endsection