<style>
    html,
    body {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        line-height: 1.5;
        font-size: 15px;
        color: #2F3044;
        background-color: #edf2f7;
        min-height: 100%;
        width: 100%;
    }

    .email-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 0;
    }

    .email-header {
        text-align: center;
        padding: 10px 40px;
    }

    .email-logo img {
        width: 100px;
    }

    .email-body {
        margin: 0 20px;
        padding: 40px;
        background-color: #ffffff;
        border-radius: 6px;
        text-align: left;
    }

    .email-content {
        padding-bottom: 30px;
        font-size: 17px;
    }

    .email-link {
        display: inline-block;
        text-align: center;
        padding: 0.75575rem 1.3rem;
        font-size: 0.925rem;
        line-height: 1.5;
        border-radius: 0.35rem;
        color: #ffffff;
        background-color: #009EF7;
        font-weight: 600;
        text-decoration: none;
        outline: none;
    }

    .email-footer {
        font-size: 13px;
        text-align: center;
        padding: 20px;
        color: #6d6e7c;
    }

    .email-footer a {
        text-decoration: none;
        color: #009EF7;
    }
</style>

<div class="email-container">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td class="email-header">
                <a href="{{ route('homePage') }}" target="_blank">
                    <div class="email-logo">
                        <img src="{{ $logoUrl }}" alt="Logo">
                    </div>
                </a>
            </td>
        </tr>
        <tr>
            <td class="email-body">
                <div class="email-content">
                    <strong>Hi {{ $data }}</strong>
                </div>
                <div class="email-content">
                    Welcome to GoFlixza! We're thrilled to have you on board.
                </div>
                <div class="email-content">
                    Your account has been successfully created. You can now access your personalized dashboard packed
                    with features to enhance your experience.
                </div>
                <div class="email-content" style="text-align: center;">
                    <a href="{{ route('login') }}" class="email-link" target="_blank">Login To Your Dashboard</a>
                </div>
                <div class="email-content">Need Help?</div>
                <div class="email-content">
                    Our friendly support team is always happy to assist you. You can find answers to most questions and
                    contact us through
                    <a href="{{ route('contact') }}" target="_blank" style="color: #009EF7;">GO QR Contact</a>.
                </div>
                <div class="email-content">
                    Sincerely, <br>
                    The GoFlixza Team
                </div>
            </td>
        </tr>
        <tr>
            <td class="email-footer">
                <p>
                    Copyright ©
                    <a href="{{ route('homePage') }}" target="_blank">GO QR</a>.
                </p>
            </td>
        </tr>
    </table>
</div>
