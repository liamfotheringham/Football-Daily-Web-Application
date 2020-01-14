<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <title>Number one for football news | Football Daily</title>
        <link rel="stylesheet" href="../style.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
        <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport">
    </head>

    <body>
        <div class="container">
            <?php include 'header-evaluation.php'; ?>
            <h2>Week 8:</h2>
            <h3><b>Task: </b>The task next week is to upload the data to your database. Report on this task in 400 words on your web site for week 7.</h3>
            <div class="well">
                <p> This task required the use of an Electric IMP. The Electric IMP is a small internet enabled Arduino that can be used for a multitude of applications. For the tutorial we were required to enable one of the Electric IMP's to record certain values and output them to the log in the Electric IMP, interface.</p>
                
                <p>The Electric IMP's are programmed in the language <i>Squirrel</i>, which is much like C++. It is a high level language that is designed to be light-weight and be utilized in applications in the Internet of Things(IoT). Being part of the IoT all of the Electric IMPs data is being stored and calculated in the <i>Cloud</i>. The Elecrtic IMP servers are based in California, USA. Therefore anytime you interact with the data on the electric IMP the signal is being sent all the way across the globe, and the return signal is sent all the way back to the client machine. This is for all tasks, including making an LED blink every five seconds.</p>
                
                <p>In the lab we are provided with the Electric IMP, which contains a built-in voltage meter and a light sensor. A temperature gauge was also provided in the kit. The electric IMP's are assigned using a mobile application, which uses a <i>blink-up</i> system to assign them to a users account (which can be fiddly at times as we found out). Once connected, the user can create code to run on the Electric IMP compiler. The code is split into two sections, Agent Code and Device Code; The agent code is what will communicate with a designated PHP webpage. The Device code is what interacts with the designated device and the elements it has.</p>
                
                <p>As previously mentioned, the device can track several values. In the current implementation, the code is going to track the Voltage, Light Level and Temperature. These values were stored into an object, which contained all of these values plus the Device ID of the device that was retrieving these values. Once stored into the object, these values can be sent over to the Agent code and be used as a JSON string, etc.
                </p>
                
                <p>By the end of the practical, we were able to access the <i>message</i> object and allow it to display its individual attributes in the object and display them through the system log.</p>
			</div>
        </div>
        <div class="container">
            <?php include '../footer.php'; ?>
        </div>
        <script src="/controller/script.js"></script>

    </body>
</html>