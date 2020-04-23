<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-success text-center">Basic</h2>

<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#Client-side-web-APIs" role="tab" aria-controls="v-pills-home" aria-selected="true">Client-side web APIs</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#web-APIs" role="tab" aria-controls="v-pills-profile" aria-selected="false">web APIs</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
    </div>
    <div class="col-9">
        <h2 class="text-info">What is JavaScript, really?</h2>
        <p>able to create games, animated 2D and 3D graphics, comprehensive database-driven apps, and much more!</p>
        <ul>
            <li>Browser Application Programming Interfaces (APIs) — APIs built into web browsers, providing functionality like dynamically creating HTML and setting CSS styles, collecting and manipulating a video stream from the user's webcam, or generating 3D graphics and audio samples.</li>
            <li>
                Third-party APIs — Allow developers to incorporate functionality in their sites from other content providers, such as Twitter or Facebook.
            </li>
            <li>Third-party frameworks and libraries — You can apply these to your HTML to allow you to rapidly build up sites and applications.</li>
        </ul>

        <p class="bg-warning p-2">
            Note: The reason we've put the &lt;script&gt; element near the bottom of the HTML file is that HTML is loaded by the browser in the order it appears in the file.If the JavaScript is loaded first and it is supposed to affect the HTML below it, it might not work, as the JavaScript would be loaded before the HTML it is supposed to work on.Putting JavaScript loading near the bottom of the HTML page is one way to fix this
        </p>
        <p><code>querySelector()</code> and <code>textContent</code> Both of the features are parts of the Document Object Model (DOM) API, which allows to manipulate documents.</p>

        <hr>

        <h3 class="text-info">Variables</h3>

        <p> JavaScript is case sensitive — <code>myVariable</code> is a different variable to <code>myvariable</code> .</p>
        <p>variables may hold values that have different data types:</p>

        <p>Stringm, Number, Boolean, Array, Object</p>
        <p> If values couldn't change, then you couldn't do anything dynamic, </p>

        <hr>

        <h3 class="text-info">Events</h3>

        <p> Real interactivity on a website needs events. These are code structures which listen for things happening in the browser and runs code in response.</p>




    </div>
</div>

<?php include_once '../inc/footer.php' ?>
