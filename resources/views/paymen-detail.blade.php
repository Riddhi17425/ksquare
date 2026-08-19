@include('header')
<div class="site-content-contain">
<section class="my-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1 class="text-center mb-5">Payment Details</h1>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                        <img src="{{ asset('public/QRCode/qrcode.png') }}" class="header-img" alt="QRCode">
                                        <p class="text-center"><b>Scan for Payment </b></p>
                                        <p class="text-center">OR</p>
                                        <p class="text-center"><b>UPI : </b>ksquareenergyprivatelimited@sbi</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <table style="border: 0;">
                                            <tr>
                                                <td style="border: 0; text-align: left;">Bank</td>
                                                <td style="border: 0; text-align: left;">State Bank Of India </td>
                                            </tr>
                                            <tr>
                                                <td style="border: 0; text-align: left;">Account Type</td>
                                                <td style="border: 0; text-align: left;">CC Account</td>
                                            </tr>
                                            <tr>
                                                <td style="border: 0; text-align: left;">Account No</td>
                                                <td style="border: 0; text-align: left;">44281940207 </td>
                                            </tr>
                                            <tr>
                                                <td style="border: 0; text-align: left;">IFSC Code</td>
                                                <td style="border: 0; text-align: left;">SBIN0005146 </td>
                                            </tr>
                                            <tr>
                                                <td style="border: 0; text-align: left;">Branch</td>
                                                <td style="border: 0; text-align: left;">State Bank Of India - Sarkhej</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <p class="text-center">After making payment, please share the screenshot on WhatsApp at <a href="https://api.whatsapp.com/send?phone=916358154828">+91 6358 154 828</a> or email it to <a href="mailto:info@ksquareenergy.com">info@ksquareenergy.com</a>.</p>
                            </div>
                        </section>
</div>
@include('footer')