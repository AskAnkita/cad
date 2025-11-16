@extends('layouts.app')

@section('content')
      <!-- ================= HEADER ================= -->
  
    <!-- 
      This is the main section for the single course.
      All class names are prefixed with 'single-course-'
    -->
    <section class="single-course-section">
        <div class="single-course-container">
            
            <!-- Column 1: Course Image -->
            <div class="single-course-image-wrapper">
                <img src="/assets/sis.png" alt="Software in Specialization Course">
            </div>

            <!-- Column 2: Course Details -->
            <div class="single-course-details-wrapper">
                <h2 class="single-course-title">Specialization in Software</h2>
                
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
    The Specialization in Software course is designed for students who want to master essential digital tools used in the fashion, design, and creative industries. 
    This program covers professional software such as Adobe Photoshop, Illustrator, CorelDRAW, and other design applications used for creating patterns, layouts, digital illustrations, posters, logos, and fashion boards. 
    You will learn how to convert creative ideas into digital designs, work with layers, brushes, vectors, and advanced editing features. 
    Practical projects help you build a strong portfolio, preparing you for careers in graphic design, fashion design, digital marketing, branding, and creative freelancing.
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
@endsection