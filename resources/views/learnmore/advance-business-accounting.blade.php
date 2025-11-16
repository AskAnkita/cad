@extends('layouts.app')

@section('content')
    <!-- 
      This is the main section for the single course.
      All class names are prefixed with 'single-course-'
    -->
   
<section class="single-course-section">
    <div class="single-course-container">
        
        <div class="single-course-image-wrapper">
            <img src="/assets/abba.png" alt="Advanced Business Accounting">
        </div>

        <div class="single-course-details-wrapper">
            <h2 class="single-course-title">Advance Business Accounting</h2>

            <div class="single-course-meta">
                <span class="single-course-meta-item">
                    <strong>Duration:</strong> 3 Months
                </span>
                <span class="single-course-meta-item">
                    <strong>Level:</strong> Advanced
                </span>
                <span class="single-course-meta-item">
                    <strong>Format:</strong> Offline 
                </span>
            </div>

            <div class="single-course-description">
                <p>
                  This advanced course is designed for learners who want to master professional-level accounting.
                  It covers complex business accounts and advanced financial management
                    You will learn balance sheet preparation, profit & loss accounting, GST filing basics,
                    business taxation fundamentals, Tally ERP concepts, inventory management, and account reconciliation.
                    Perfect for those who want to take accounting as a career.
                  
                </p>
              
            </div>

            <div class="single-course-footer">
                <a href="/contact.html" class="single-course-enroll-btn">Enroll Now</a>
            </div>
        </div>

    </div>
</section>

      <!-- ================= FOOTER ================= -->
@endsection