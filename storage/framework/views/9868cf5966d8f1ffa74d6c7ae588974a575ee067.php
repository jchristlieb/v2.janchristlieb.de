<?php $__env->startSection('meta-info'); ?>
    <title>Privacy information</title>
    <meta name="description" content="You may surf anonymously on my website. Nice, isn't it?">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('intro'); ?>
    <div class="row">
        <div class="intro">
            <h1 class="display-4">Privacy</h1>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-2">
                <p class="lead">I am an ambassador of privacy rights. Thus I highly welcome that the European Union
                    introduces extensive privacy regulations. Herewith I assure that as long as you are not getting in
                    touch with me by email, you are surfing anonymously on my website.</p>
            </div>
            <div class="col-12 mb-2">
                <h3 class="mb-2">Cookies</h3>
                <p>I do not set any cookies on my website.</p>
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

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>