<?php
extract($_POST);

$data = '<div class="information">
<h3>This is created by Akshay Shah as a Project</h1>
    <h6>Now you can get certificate easily</h6>
    <button onclick="print()">Print</button>
</div>
<div class="print">
<div class="certificateOuterBorder">
    <div class="secondaryBorder">
    <p class="smallCornerBox"></p>
        <p class="smallCornerBox"></p>
        <p class="smallCornerBox"></p>
        <p class="smallCornerBox"></p>
        <div class="leftPart">
            <img src="./aws.png" alt="">
            <div class="leftContent">
                <p id="date">' . $Date . '</p>
                <h3 id="name">' . $Name . '</h3>
                <p>has successfully complited</p>
                <h6 id="courseName">' . $Course . '</h6>
                <p>an online non-credit course authorized by Amazon Web Services and offered through Coursera
                </p>
            </div>
            <div class="leftSignature">
                <img src="./signature.png" alt="" id="signature">
                <p id="signatureLine">....................................................................</p>
                <p>lain sundrud</p>
                <p>senior technical trainer</p>
                <p><span>aws</span> Trainer and certification</p>
            </div>
        </div>
        <div class="rightPart">
            <div class="stampHolder">
                <h6><pre></pre>Course
                            certificate</pre></h6>
                    <img src="image/courseraStamp.png" alt="">
            </div>
            <p>Verify at coursera.org/verify/<span id="studentId">' . $StudentId . '</span></p>
            <p>Coursera has confirmed the identity of this individual and their participation in the course.</p>

        </div>
        
    </div>
</div>
</div>';
echo $data;
