<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Popup</title>
    <style>
        /* Popup Background */
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            
            z-index:999;
        }

        /* Popup Content */
        .popup-content {
            background: white;
            padding:20px;
            /*border-radius: 10px;*/
            width: 500px;
            margin:50px 0;
            
            /*box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);*/
           
        }

        .close-btn {
               background: #ff000000;
                color: #909090;
                border: none;
                padding: 5px 10px;
                margin-top: 10px;
                cursor: pointer;
                font-size: 28px;
        }
        .inquiry_form_header{
            display: flex;
            justify-content: space-between;
        }
        .inquiry_form_header h2{
            
            font-size: 28px;
            color: #22285f;
        }
        .left_ft_modal{
            color:#fff;
            background-color:#22285f;
        }
        .left_ft_modal h5{
            color:#fff;
        }
        .left_ft_modal a{
            color:#fff;
            text-decoration:underline;
            font-weight:600;
        }
        .right_ft_modal input{
            height:35px!important;
        }
        @media (max-width:1440px){
            .popup-content{
                width:380px;
            }
        }
        @media (max-width:768px){
            .popup-content{
                display:none;
                height:100%;
            }
        }
        
    </style>
</head>
<body>

    <!-- Popup -->
    <div class="popup-overlay" id="popup">
        <div class="popup-content left_ft_modal">
            <h5 class="mb-4 mt-2 ms-2">Our USPs</h5>
                <ol>
                    <li>More than 2 Decades of Experience in Filtration Solutions</li>
                    <li>NSF Certified Products</li>
                    <li>Experienced and Dedicated Team</li>
                    <li>Global Service Provider</li>
                    <li>Customizable Filtration Solutions</li>
                    <li>Wide Industry Coverage</li>
                </ol>
                <h5 class="mt-5 mb-3">You can also reach us via</h5>
                Email: <a href="mailto:sales@mmpfilter.com">sales@mmpfilter.com</a><br>
                Phone Number: <a href="tel:+91 9830030614">+91 9830030614</a>
           
        </div>
         <div class="popup-content right_ft_modal">
             <div class="row">
				<div class="col-md-12">
                <div class="inquiry_form_header">
                                <h2>Inquiry Form</h2>
                                 <button class="close-btn" onclick="closePopup()">x</button>
                                
                            </div>
				</div>
			</div>
           <form class="inquiry_contact" action="" method="post" >
                                <input type="hidden" name="source" value="Home Page Sidebar Inquiry">
                                @csrf
                                <div class="form-group">
                                    <label style="color:#666666;">Name : </label>
                                    <input class="form-control" required="required" id="name" name="name" placeholder="Name" type="text" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();">
                                    <span class="alert-error"></span>
                                </div>
                                <div class="form-group">
                                    <label style="color:#666666;">Inquiry For : </label>
                                    <select class="form-control" required="required" name="subject" id="subject">
                                        <option value="Solar Rooftop Project" style="color:#666666;">Solar Rooftop Project</option>
                                        <option value="Solar Product Inquiry" style="color:#666666;">Solar Product Inquiry</option>
                                        <option value="Dealership Inquiry" style="color:#666666;"> Dealership Inquiry</option>
                                    </select>
                                    <span class="alert-error"></span>
                                </div>
                                <div class="form-group">
                                    <label style="color:#666666;">Email: </label>
                                    <input class="form-control" required="required" id="email" name="email" placeholder="Email *" type="email">
                                    <span class="alert-error"></span>
                                </div>
                                <div class="form-group">
                                    <label style="color:#666666;">Phone : </label>
                                    <input class="form-control" required="required" id="phone" name="phone" maxlength="10" type="tel" placeholder="Phone" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);">
                                    <span class="alert-error"></span>
                                </div>
                                <div class="form-group">
                                    <label style="color:#666666;">Message : </label>
                                    <textarea class="form-control" required="required" id="message" name="message"></textarea>
                                    <span class="alert-error"></span>
                                </div>
                                <div class="form-group">
                                   <button type="submit" id="submit" class="form_inquiry_btn">
                                        Send Inquiry <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </form>
             </div>
    </div>

    <script>
        // Show the popup when the page loads
        window.onload = function() {
            setTimeout(function() {
                document.getElementById("popup").style.display = "flex";
            }, 5000); // Show after 2 seconds
        };

        // Close the popup
        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }
    </script>

</body>
</html>
