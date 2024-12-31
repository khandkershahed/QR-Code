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
                <td align="center" valign="center" style="text-align:center; padding: 40px">
                    <a href="https://www.goflixza.com/" rel="noopener" target="_blank">
                        <img alt="Logo" src="{{ asset('frontend/assets/images/logos/logo.png') }}" />
                    </a>
                </td>
            </tr>
            <tr>
                <td align="left" valign="center">
                    <div
                        style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                        <!--begin:Email content-->
                        <div style="padding-bottom: 30px; font-size: 17px;">
                            <strong>Welcome to FLIXZA GLOBAL LLC!</strong>
                        </div>
                        <div style="padding-bottom: 30px">
                            Thank You For your payment. Your Invoice ID : {{ $invoice->id }}
                        </div>
                        <div style="padding-bottom: 30px">
                            You have Successfully purchased {{ optional($product)->name }}
                        </div>
                        <!--end:Email content-->
                        <div style="padding-bottom: 10px">
                            Kind regards,
                            <br>The Flixza Global Team.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center" valign="center"
                    style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                    <p>Copyright ©
                        <a href="https://www.goflixza.com/" rel="noopener" target="_blank">Flixza Global</a>.
                    </p>
                </td>
            </tr>
            </br>
        </tbody>
    </table>
</div>
