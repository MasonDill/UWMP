<?php
    include_once 'dbh.php';
    $user = $_GET["data"];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>UWMP Questionnaire</title>
  </head>
  <body style="background-color:#003594">
<div class="container-fluid w-75" style="background-color:#FFB81C">
    
<!-- Introduction -->
  <h1>Interests</h1>
  <small>*Please provide at least one answer for every question</small>
        <p>The goal of this Project is to pair incoming freshman with upperclassmen of similar interests that would act as a guide for first year students. The program would function on a volunteer basis. The answers to this form are completely anonymous and your information will only be used in this class. There are no responsibilities attached to this survey, we are only using the data.</p>
    
<!-- Mentor or Mentee -->
    
<form action="UpdateContactInfo.php" method="post">
  <fieldset class="form-group">
    <div class="form-group">
    <div class="row justify-content-md-left">
      <div class="col col-lg-2">
      <input type="hidden" class="form-control" id="username" placeholder="Enter Username" name="username" value="<?php echo $user ?>">
      </div>

    </div>
  </div>
    
<!-- What School are you apart of -->
    <fieldset class="form-group">
    <div class="row">
      <legend class="form-label col-sm-10 pt-0">What school are you apart of? </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="Dietrich" value="Dietrich">
          <label class="form-check-label" for="Dietrich">
            Dietrich School of Arts and Sciences
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="Business" value="Business">
          <label class="form-check-label" for="Business">
            Business
          </label>
          </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="Computing" value="Computing">
          <label class="form-check-label" for="Computing">
            Computing and Information
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="Dental" value="Dental">
          <label class="form-check-label" for="Dental">
            Dental Medicine
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="Education" value="Education">
          <label class="form-check-label" for="Education">
            Education
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="Engineering" value="Engineering">
          <label class="form-check-label" for="Engineering">
            Swanson School of Engineering
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="General" value="General">
          <label class="form-check-label" for="General">
            General Studies
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="Health" value="Health">
          <label class="form-check-label" for="Health">
            Health and Rehabilitation Sciences
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="Law" value="Law">
          <label class="form-check-label" for="Law">
            Law
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="Medicine" value="Medicine">
          <label class="form-check-label" for="Medicine">
            Medicine
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="Nursing" value="Nursing">
          <label class="form-check-label" for="Nursing">
            Nursing
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="Pharmacy" value="Pharmacy">
          <label class="form-check-label" for="Pharmacy">
            Pharmacy
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="Affairs" value="Affairs">
          <label class="form-check-label" for="Affairs">
            Public and International Affairs
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="PublicHealth" value="PublicHealth">
          <label class="form-check-label" for="PublicHealth">
            Public Health
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="school" id="Social" value="Social">
          <label class="form-check-label" for="Social">
            Social Work
          </label>    
        </div>
      </div>
    </div>
  </fieldset>
    
<!-- Pairing Within School? -->
   <fieldset class="form-group">
    <div class="row">
      <legend class="form-label col-sm-10 pt-0">Would you like to be paired with someone within your school/major?</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="schoolPref" id="WithinSchoolYes" value="1">
          <label class="form-check-label" for="WithinSchoolYes">
            Yes
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="schoolPref" id="WithinSchoolNo" value="2">
          <label class="form-check-label" for="WithinSchoolNo">
            No - I would like to meet people outside my major
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="schoolPref" id="WithinSchoolDoesntMatter" value="3">
          <label class="form-check-label" for="WithinSchoolDoesntMatter">
            Doesn't matter
          </label>
        </div>
      </div>
    </div>
  </fieldset> 
    
<!-- Takeaways from Extracurriculars -->
<fieldset class="form-group">
    <div class="row">
      <legend class="form-label col-sm-10 pt-0">Which of these things do you hope to take away from your extracurricular activities?</legend>
      <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="takeAway[]" value="MeetPeople" id="MeetPeople">
            <label class="form-check-label" for="MeetPeople">
                Meet new people
            </label>
          </div> 
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="takeAway[]" value="LearnSkills" id="LearnSkills">
            <label class="form-check-label" for="LearnSkills">
               Get better at, or learn a skill 
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="takeAway[]" value="Hobby" id="Hobby">
            <label class="form-check-label" for="Hobby">
                Just for fun/hobby
            </label>
          </div>
        </div>
    </div>
</fieldset>
    
<!-- Clubs/Organizations -->
 <fieldset class="form-group">
    <div class="row">
      <legend class="form-label col-sm-10 pt-0">Which of these clubs/organizations would you be interested in?</legend>
      <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="organizations[]" value="Blue&Gold" id="Blue&Gold">
            <label class="form-check-label" for="Blue&Gold">
                Blue and Gold Society
            </label>
          </div> 
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="organizations[]" value="Ski/Snowboard" id="Ski/Snowboard">
            <label class="form-check-label" for="Ski/Snowboard">
               Ski and Snowboard Club 
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="organizations[]" value="Intramurals" id="Intramurals">
            <label class="form-check-label" for="Intramurals">
                Intramural Sports
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="organizations[]" value="SGB" id="SGB">
            <label class="form-check-label" for="SGB">
                Student Government
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="organizations[]" value="MathClub" id="MathClub">
            <label class="form-check-label" for="MathClub">
                Math Club
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="organizations[]" value="PittBand" id="PittBand">
            <label class="form-check-label" for="PittBand">
                Pitt Band
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="organizations[]" value="ServiceClub" id="ServiceClub">
            <label class="form-check-label" for="ServiceClub">
                Service-related club
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="organizations[]" value="GreekLife" id="GreekLife">
            <label class="form-check-label" for="GreekLife">
                Greek Life
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="organizations[]" value="Abroad" id="Abroad">
            <label class="form-check-label" for="Abroad">
                Study Abroad
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="organizations[]" value="NoneOfTheAbove" id="NoneOfTheAbove">
            <label class="form-check-label" for="NoneOfTheAbove">
                None of the above
            </label>
          </div>
        </div>
    </div>
</fieldset>
    
<!-- Where are you from? -->
 <fieldset class="form-group">
    <div class="row">
      <legend class="form-label col-sm-10 pt-0">Where are you from?</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="location" id="PA-Local" value="PA-Local">
          <label class="form-check-label" for="PA-Local">
            PA, Local
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="location" id="PA-OutsidePhilly" value="PA-OutsidePhilly">
          <label class="form-check-label" for="PA-OutsidePhilly">
            PA, outside Philadelphia
          </label>
        </div>
          <div class="form-check">
          <input class="form-check-input" type="radio" name="location" id="Philadelphia" value="Philadelphia">
          <label class="form-check-label" for="Philadelphia">
            PA, actually inside Philadelphia
          </label>
        </div>
          <div class="form-check">
          <input class="form-check-input" type="radio" name="location" id="PA-Other" value="PA-Other">
          <label class="form-check-label" for="PA-Other">
            PA, none of the other options
          </label>
        </div>
          <div class="form-check">
          <input class="form-check-input" type="radio" name="location" id="OutsidePA" value="OutsidePA">
          <label class="form-check-label" for="OutsidePA">
            Outside PA, USA
          </label>
        </div>
          <div class="form-check">
          <input class="form-check-input" type="radio" name="location" id="International" value="International">
          <label class="form-check-label" for="International">
            International Student
          </label>
        </div>
        </div>
     </div>
</fieldset>
    
<!-- Music Preference -->
<fieldset class="form-group">
    <div class="row">
      <legend class="form-label col-sm-10 pt-0">What kind of music do you listen to?</legend>
      <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="musicPref[]" value="Hip-Hop" id="Hip-Hop">
            <label class="form-check-label" for="Hip-Hop">
                Hip Hop/ Rap
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="musicPref[]" value="Rock" id="Rock">
            <label class="form-check-label" for="Rock">
                Rock
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="musicPref[]" value="Country" id="Country">
            <label class="form-check-label" for="Country">
                Country
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="musicPref[]" value="Pop" id="Pop">
            <label class="form-check-label" for="Pop">
                Pop
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="musicPref[]" value="Indie" id="Indie">
            <label class="form-check-label" for="Indie">
                Indie
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="musicPref[]" value="MusicalTheater" id="MusicalTheater">
            <label class="form-check-label" for="MusicalTheater">
                Musical Theater
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="musicPref[]" value="Oldies" id="Oldies">
            <label class="form-check-label" for="Oldies">
                The Oldies
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="musicPref[]" value="Jazz" id="Jazz">
            <label class="form-check-label" for="Jazz">
                Jazz
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="musicPref[]" value="Orchestra" id="Orchestra">
            <label class="form-check-label" for="Orchestra">
                Orchestra
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="musicPref[]" value="Fusion" id="Fusion">
            <label class="form-check-label" for="Fusion">
                Fusion
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="musicPref[]" value="Punk" id="Punk">
            <label class="form-check-label" for="Punk">
                Punk
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="musicPref[]" value="EDM" id="EDM">
            <label class="form-check-label" for="EDM">
                EDM/House
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="musicPref[]" value="OtherOption" id="OtherOption">
            <label class="form-check-label" for="OtherOption">
                Other
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="musicPref[]" value="NoPreference" id="NoPreference">
            <label class="form-check-label" for="NoPreference">
                I don't have a preference
            </label>
          </div>
        </div>
    </div>
</fieldset>
    
<!-- How People Describe You -->
 <fieldset class="form-group">
    <div class="row">
      <legend class="form-label col-sm-10 pt-0">People would describe you as:</legend>
      <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="personality[]" value="Quiet" id="Quiet">
            <label class="form-check-label" for="Quiet">
                Quiet and keeps to themselves
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="personality[]" value="Talkative" id="Talkative">
            <label class="form-check-label" for="Talkative">
                Talkative and outgoing
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="personality[]" value="GoodStudent" id="GoodStudent">
            <label class="form-check-label" for="GoodStudent">
                On time with assignments and a good student
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="personality[]" value="EasyGoing" id="EasyGoing">
            <label class="form-check-label" for="EasyGoing">
                Easy going and relaxed
            </label>
          </div>
        </div>
     </div>
</fieldset>
    
<!-- Interests Scale -->
<h1>Interests Evaluations</h1>
        <p>Please complete the following questions by ranking your response on a scale from strongly disagree to strongly agree. If neutral on a statement or would prefer not to answer, please select the third option.</p>
        <fieldset class="form-group">
            <div class="row">
            <legend class="form-label col-sm-10 pt-0">I enjoy meeting new people</legend>
            <div class="col-sm-10">
            <div class="form-check">
                <table class="striped-columns" style="width:100%; height=100%">
                    <thead>
                        <tr>
                            <th>Strongly Disagree</th>
                            <th>Disagree</th>
                            <th>Neutral</th>
                            <th>Agree</th>
                            <th>Strongly Agree</th>
                        </tr>
                    </thead>
            <tbody>
            <tr>
            <td><input type="radio" value="1" name="interest1"/></td>
            <td><input type="radio" value="2" name="interest1"/></td>
            <td><input type="radio" value="3" name="interest1"/></td>
            <td><input type="radio" value="4" name="interest1"/></td>
            <td><input type="radio" value="5" name="interest1"/></td>
            </tr>
            </tbody>
                </table>
            </div>
            </div>
            </div>
            <p></p>
            
            <div class="row">
            <legend class="form-label col-sm-10 pt-0">I spend a lot of time studying or reading</legend>
            <div class="col-sm-10">
            <div class="form-check">
                <table class="striped-columns" style="width:100%; height=100%">
                    <thead>
                        <tr>
                            <th>Strongly Disagree</th>
                            <th>Disagree</th>
                            <th>Neutral</th>
                            <th>Agree</th>
                            <th>Strongly Agree</th>
                        </tr>
                    </thead>
            <tbody>
            <tr>
            <td><input type="radio" value="1" name="interest2"/></td>
            <td><input type="radio" value="2" name="interest2"/></td>
            <td><input type="radio" value="3" name="interest2"/></td>
            <td><input type="radio" value="4" name="interest2"/></td>
            <td><input type="radio" value="5" name="interest2"/></td>
            </tr>
            </tbody>
                </table>
            </div>
            </div>
            </div>
            <p></p>
            
            <div class="row">
            <legend class="form-label col-sm-10 pt-0">I plan to work part time during college</legend>
            <div class="col-sm-10">
            <div class="form-check">
                <table class="striped-columns" style="width:100%; height=100%">
                    <thead>
                        <tr>
                            <th>Strongly Disagree</th>
                            <th>Disagree</th>
                            <th>Neutral</th>
                            <th>Agree</th>
                            <th>Strongly Agree</th>
                        </tr>
                    </thead>
            <tbody>
            <tr>
            <td><input type="radio" value="1" name="interest3"/></td>
            <td><input type="radio" value="2" name="interest3"/></td>
            <td><input type="radio" value="3" name="interest3"/></td>
            <td><input type="radio" value="4" name="interest3"/></td>
            <td><input type="radio" value="5" name="interest3"/></td>
            </tr>
            </tbody>
                </table>
            </div>
            </div>
            </div>
            <p></p>
            
            <div class="row">
            <legend class="form-label col-sm-10 pt-0">I like working on independent projects/ideas</legend>
            <div class="col-sm-10">
            <div class="form-check">
                <table class="striped-columns" style="width:100%; height=100%">
                    <thead>
                        <tr>
                            <th>Strongly Disagree</th>
                            <th>Disagree</th>
                            <th>Neutral</th>
                            <th>Agree</th>
                            <th>Strongly Agree</th>
                        </tr>
                    </thead>
            <tbody>
            <tr>
            <td><input type="radio" value="1" name="interest4"/></td>
            <td><input type="radio" value="2" name="interest4"/></td>
            <td><input type="radio" value="3" name="interest4"/></td>
            <td><input type="radio" value="4" name="interest4"/></td>
            <td><input type="radio" value="5" name="interest4"/></td>
            </tr>
            </tbody>
                </table>
            </div>
            </div>
            </div>
            <p></p>
            
            <div class="row">
            <legend class="form-label col-sm-10 pt-0">I watch a lot of interest4 or other TV</legend>
            <div class="col-sm-10">
            <div class="form-check">
                <table class="striped-columns" style="width:100%; height=100%">
                    <thead>
                        <tr>
                            <th>Strongly Disagree</th>
                            <th>Disagree</th>
                            <th>Neutral</th>
                            <th>Agree</th>
                            <th>Strongly Agree</th>
                        </tr>
                    </thead>
            <tbody>
            <tr>
            <td><input type="radio" value="1" name="interest5"/></td>
            <td><input type="radio" value="2" name="interest5"/></td>
            <td><input type="radio" value="3" name="interest5"/></td>
            <td><input type="radio" value="4" name="interest5"/></td>
            <td><input type="radio" value="5" name="interest5"/></td>
            </tr>
            </tbody>
                </table>
            </div>
            </div>
            </div>
            <p></p>
    </fieldset>
    
<!-- Short Biography -->
<h1>Write a quick profile: bio (less than 150 words) </h1>
        <p>In a short response please provide any additional information you would like people to know about you. All potential mentor/mentee matches will be able to see these biographies, and for many, will be a great way to get to know potential matches. Please consider taking your time to carefully craft a response. </p>
    <div class="form-group">
    <label for="Biography">Biography:</label>
    <textarea class="form-control" id="biography" name="biography" rows="7"></textarea>
  </div>
    
<!-- Sign-Up Button -->
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" style="width:15%; height:100%; border: 1px solid">Sign up</button>
    </div>
  </div>
</form>
</div>
</body>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>