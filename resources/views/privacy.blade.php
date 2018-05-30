@extends('layouts.master')

@section('meta-info')
    <title>Data privacy</title>
    <meta name="description" content="You may surf anonymously on my website. Nice, isn't it?">
@endsection

@section('intro')
    <div class="row">
        <div class="intro">
            <h1 class="display-4">Privacy</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mb-2">
                <p class="lead">I am an ambassador of privacy rights. Thus I highly welcome that the European Union
                    introduces extensive privacy regulations. Herewith I assure that as long as you are not getting in
                    touch with me by email, you are surfing anonymously on my website.</p>
            </div>
            <div class="col-12 mb-2">
                <h3 class="mb-2">Cookies</h3>
                <p>This website uses non personal related cookies solely for technical and security
                    reason. Cookies are tiny text files stored on your device.
                    However, cookies are not evil by default. <strong>The cookies I use do not process any personal data.</strong>.</p>
                <h4 class="mb-2">List of used cookies</h4>
                <table class="table table-hover table-responsive-md">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Value</th>
                        <th scope="col">Paths</th>
                        <th scope="col">Storage</th>
                        <th scope="col">Reason</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">XSRF-Token</th>
                        <td>random hash key</td>
                        <td>all</td>
                        <td>1 day</td>
                        <td>security: prevents you against <a class="underline" href="https://en.wikipedia.org/wiki/Cross-site_request_forgery" target="_blank">CSRF attacks</a></td>
                    </tr>
                    <tr>
                        <th scope="row">jc_session</th>
                        <td>random hash key</td>
                        <td>all</td>
                        <td>1 day</td>
                        <td>technical: if applicable it stores encrypted user information e.g. language preferences or access rights to restricted pages</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 mb-2">
                <h3 class="mb-2">Logfiles</h3>
                <p>My server collects log files from each user session for auditing and security purposes. Those
                    information are provided by your web browser and usually include technical data such as type and
                    version of your browser, operating system, referer URL, time of request as well as personal data
                    such as your IP address.</p>
                <p>Before logging I anonymize your IP address by replacing the last three
                    digits with an 'X'. This process makes the log files solely of technical nature without any
                    possibility (at least to my knowledge) to trace the data back to a person.</p>
            </div>
            <div class="col-12 mb-2">
                <h3 class="mb-2">Getting in touch</h3>
                <p>I welcome you to get in touch with me to discuss possible cooperation. This way I do collect personal
                    data from you like your email address and any other personal data that you may reveal within
                    the process of our communication.</p>
                <p>I view those communication requests as steps prior entering into a contract (Art. 6, GDPR, paragraph
                    1,b). If you get in touch with me, I assume you accept this view. I will delete your personal data
                    as soon as our contract ends or I as soon as I realize that we are not going to enter into a
                    contract.</p>
            </div>
            <div class="col-12 mb-2">
                <h3 class="mb-2">Rights of the data subject</h3>
                <p>I welcome that the GDPR provides the data subject, meaning you, the right to access your processed
                    data at any time. Further you have the right to restrict the processing of your data among other. If
                    you want to
                    demand any of your rights, please get in touch with me and I do my best to match your expectations.
                    Visit
                    the <a class="underline" href="/legal">legal notice</a> page for my contact data.</p>
            </div>
        </div>
    </div>

@endsection



