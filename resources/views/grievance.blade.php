@include('header')
<style>
   .grievance-form textarea {
      height: 75px;
   }

   .grievance-form {
      display: flex;
      padding: 40px;
      flex-direction: column;
      align-items: flex-start;
      gap: 60px;
      border-radius: 10px;
      border: 1px solid #DDD;
   }

   .grievance-form .wpcf7-submit {
      background: #324387;
      display: flex;
      padding: 10px 36px;
      justify-content: center;
      align-items: center;
      gap: 10px;
   }
    @media only screen and (max-width: 992px){
   .grievance-form {
    padding: 20px 10px;
    gap: 15px;
}
}
</style>
<div class="grievance-banner cspt-bg-color-transparent cspt-bg-image-yes">
   <div class="container">
      <div class="cspt-title-bar-content">

         <div class="cspt-title-bar-content-inner">
            <div class="cspt-tbar">
               <div class="cspt-tbar-inner container">
                  <!-- <h1 class="cspt-tbar-title"> Profile</h1> -->
               </div>
            </div>
            <div class="cspt-breadcrumb">
               <!-- <div class="cspt-breadcrumb-inner"><span><a title=""
                                            href=""
                                            class="home"><span>About Us</span></a></span><i
                                        class="cspt-base-icon-angle-right"></i><span
                                        class="post post-page current-item">Profile</span></div> -->
            </div>
         </div>
      </div><!-- .cspt-title-bar-content -->
   </div><!-- .container -->
</div>
<div class="pt-4">
   <div class="row justify-content-center ">
      <div class="col-md-8 ">
         <div class="grievance-form">


            <form method="post" action="{{ route('grievancestore') }}">
                @csrf
                <div class="cspt-main-form">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="elementor-heading-title elementor-size-default" style="color:#000">
                                Grievance Submission Form
                            </h2>
                            <p class="mt-3">
                                Your voice matters. We're here to help resolve your concerns quickly and efficiently.
                            </p>
                        </div>
            
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="text" name="full_name" id="fname"
                                    class="wpcf7-form-control wpcf7-text"
                                    placeholder="Full Name *"
                                    required
                                    oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();" />
                            </div>
                        </div>
            
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="text" name="subject" id="subject"
                                    class="wpcf7-form-control wpcf7-text"
                                    placeholder="Subject *" required
                                    oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();" />
                            </div>
                        </div>
            
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="email" name="email" id="email"
                                    class="wpcf7-form-control"
                                    placeholder="Email ID *"
                                    required />
                            </div>
                        </div>
            
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="text" name="phone" id="phone"
                                    maxlength="10" minlength="10"
                                    class="wpcf7-form-control"
                                    placeholder="Phone Number *" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                                    required />
                            </div>
                        </div>
            
                        <div class="col-sm-6">
                            <div class="input-group input-button">
                               <span class="wpcf7-form-control-wrap website-url">
                                  <select name="state" id="state" class="wpcf7-form-control wpcf7-select" required>
                                     <option value="" selected disabled>
                                        State *
                                     </option>
                                     @foreach($state as $states)
                                     <option stateid="{{ $states->id }}" value="{{ $states->name }}">
                                        {{ ucfirst(strtolower($states->name)) }}
                                     </option>
                                     @endforeach
                                  </select>
                               </span>
                               <span class="text-danger"></span>
                            </div>
                            </p>
                         </div>
            
                        <div class="col-sm-6">
                        <div class="input-group input-button">
                            <span class="wpcf7-form-control-wrap website-url">
                                <select name="city" id="city" class="wpcf7-form-control wpcf7-select" required>
                                    <option value="" selected disabled>
                                    City *
                                    </option>
                                </select>
                            </span>
                            <span class="text-danger"></span>
                        </div>
                        </div>
            
                        <div class="col-sm-12">
                            <div class="input-group">
                                <textarea name="message" id="message" rows="3"
                                    class="wpcf7-form-control"
                                    placeholder="Description of Issue *" required></textarea>
                            </div>
                        </div>
            
                        <div class="col-sm-12">
                            <div class="input-group input-button mb-0">
                                <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="row">
               <img src="public/images/or-img.png" alt="or">
            </div>

            <div class="row">
               <a href="mailto:grievance@ksquareenergy.com">
                  <img src="public/images/contact-for-escalation.png" alt="contact-for-escalation">
               </a>
            </div>
         </div>

      </div>
   </div>
</div>
@include('footer')
<script>
    $('#state').on('change', function () {
        var idState = $(this).find(':selected').attr('stateid');
        $.ajax({
            url: "{{ url('/fetch-cities') }}",
            type: "POST",
            data: {
                state_id: idState,
                _token: '{{ csrf_token() }}'
            },
            dataType: 'json',
            success: function (res) {
                $("#city").empty();
                if (res.cities && res.cities.length > 0) {
                    $("#city").append('<option value="" disabled selected>Select your city</option>');
                    $.each(res.cities, function (key, value) {
                        $("#city").append('<option value="' + value.name + '">' + value.name + '</option>');
                    });
                } else {
                    $("#city").append('<option value="" disabled>No cities available</option>');
                }
            },
            error: function () {
                alert('Unable to fetch cities. Please try again.');
            }
        });
    });
</script>