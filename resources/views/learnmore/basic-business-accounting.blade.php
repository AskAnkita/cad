@extends('layouts.app')

@section('content')

    <!-- 
      This is the main section for the single course.
      All class names are prefixed with 'single-course-'
    -->
  
<section class="single-course-section">
    <div class="single-course-container">
        
        <div class="single-course-image-wrapper">
            <img src="/assets/bba.png" alt="Basic Business Accounting">
        </div>

        <div class="single-course-details-wrapper">
            <h2 class="single-course-title">Basic Business Accounting</h2>

            <div class="single-course-meta">
                <span class="single-course-meta-item">
                    <strong>Duration:</strong> 2 Months
                </span>
                <span class="single-course-meta-item">
                    <strong>Level:</strong> Beginner
                </span>
                <span class="single-course-meta-item">
                    <strong>Format:</strong> Offline 
                </span>
            </div>

            <div class="single-course-description">
                <p>
    Learn the fundamentals of accounting used in small and medium businesses. 
    This beginner-friendly course is perfect for students, job seekers, and entrepreneurs 
    who want to understand how daily financial transactions are recorded and managed.
        You will learn journal entries, ledgers, debit-credit rules, cashbook preparation, 
        purchase–sales records, basic GST concepts, and how to create simple financial statements 
        like Profit & Loss Accounts and Balance Sheets.  
        The course includes practical exercises and real-world examples, helping you build a 
        solid foundation in business accounting that you can apply immediately.
    
</p>
            
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