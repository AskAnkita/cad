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
                <img src="/assets/bs.png" alt="Advanced Data Science Course">
            </div>

            <!-- Column 2: Course Details -->
            <div class="single-course-details-wrapper">
                <h2 class="single-course-title">Basic Stitching (3 Months)</h2>
                
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
    Start your journey in tailoring with our Basic Stitching Course. 
    This beginner-friendly program teaches essential sewing skills such as 
    hand stitching, machine operation, fabric cutting, hemming, piping, and simple kurti stitching. 
    You will learn how to take measurements correctly, handle a sewing machine with confidence, 
    and create neat, well-finished garments. Practical exercises and step-by-step guidance help 
    you build a strong foundation for advanced stitching and designing.
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