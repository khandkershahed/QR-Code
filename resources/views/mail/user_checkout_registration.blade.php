<style>
    html,
    body {
        padding: 0;
        margin: 0;
    }
</style>
<div
    style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
        style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
        <tbody>
            <tr>
                <td align="center" valign="center" style="text-align:center; padding: 10px 40px">
                    <a href="{{ route('homePage') }}" rel="noopener" target="_blank">
                        <img alt="Logo" src="{{ asset('images/logo.png') }}" width="100px" />
                    </a>
                </td>
            </tr>
            <tr>
                <td align="left" valign="center">
                    <div
                        style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                        <div style="padding-bottom: 30px; font-size: 17px;">
                            <strong>Hi {{ $data['name'] }}</strong>
                        </div>
                        <div style="padding-bottom: 30px">Welcome to Go QR! We're
                            thrilled to have you on board.</div>
                        <div style="padding-bottom: 30px">
                            Your account has been successfully created. You can now access your personalized dashboard
                            packed with features to enhance your experience. The below your login credential is given to
                            login to your dashboard.
                        </div>
                        {{-- <div style="padding-bottom: 40px; text-align:center;">
                            <a href="{{ route('login') }}" rel="noopener"
                                style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle"
                                target="_blank">
                                Login To Your Dashboard
                            </a>
                        </div> --}}
                        <div style="padding-bottom: 30px">
                            Click this <a href="{{ route('dashboard') }}"
                                style="text-decoration:none;display:inline-block;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle">URL
                                ({{ route('login') }})</a> to go to your dashboard.
                        </div>
                        <div style="text-align: center; padding-bottom: 30px; border: 1px #eee; background:#edf2f7">
                            <h6 style="text-align: left; padding-bottom: 10px;">User Name : {{ $data['email'] }}</h6>
                            <h6 style="text-align: left; padding-bottom: 10px;">Password: {{ $data['password'] }}</h6>
                        </div>
                        <div style="padding-bottom: 40px; text-align:center;">
                            <a href="{{ route('contact') }}" rel="noopener"
                                style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle"
                                target="_blank">
                                Contact Us
                            </a>
                        </div>
                        <div style="padding-bottom: 30px">
                            Need Help?
                        </div>
                        <div style="padding-bottom: 30px">
                            Our friendly support team is always happy to assist you. You can find answers to most
                            questions and contact us through
                            <a href="{{ route('contact') }}" rel="noopener" target="_blank"
                                style="text-decoration:none;color: #009EF7">Go Qr
                                Contact</a>.
                        </div>
                        <!--end:Email content-->
                        <div style="padding-bottom: 10px">Sincerely,<br>The Go Qr Team.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center" valign="center"
                    style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                    <p>Copyright © <a href="{{ route('homePage') }}" rel="noopener" target="_blank">Go Qr</a>.</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
