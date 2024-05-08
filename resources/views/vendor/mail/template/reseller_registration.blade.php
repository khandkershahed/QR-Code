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
                        <img alt="Logo" src="{{ $logoUrl }}" width="100px"/>
                    </a>
                </td>
            </tr>
            <tr>
                <td align="left" valign="center">
                    <div
                        style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                        <!--begin:Email content-->
                        <div style="padding-bottom: 30px; font-size: 17px;">
                            <strong>Hey {{ $data }}</strong>
                        </div>
                        <div style="padding-bottom: 30px">Your Account has been successfully created in our website.You can now login to your dashboard from below link:
                        </div>
                        <div style="padding-bottom: 40px; text-align:center;">
                            <a href="{{ route('reseller.login') }}"
                                rel="noopener"
                                style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle"
                                target="_blank">Login To Your Dashboard</a>
                        </div>
                        <div style="padding-bottom: 30px">Joining with us will give you access to your personal dashboard,
                            including information about our products.</div>
                        <div style="padding-bottom: 30px">You can find answers to most questions and get in touch with
                            us at
                            <a href="{{ route('contact') }}" rel="noopener" target="_blank"
                                style="text-decoration:none;color: #009EF7">GO QR Contact</a>.
                        </div>
                        <!--end:Email content-->
                        <div style="padding-bottom: 10px">Kind regards,
                            <br>The GO QR Team.
            <tr>
                <td align="center" valign="center"
                    style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">

                    <p>Copyright ©
                        <a href="{{ route('homePage') }}" rel="noopener" target="_blank">GO QR</a>.
                    </p>
                </td>
            </tr></br>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
