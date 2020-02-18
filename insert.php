
<!DOCTYPE html>
<!-- saved from url=(0049)http://arunabhverma.com/insignia/Index1012V3.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Insignia</title>
<style>

/*body font specified*/
body {font-family: "Lato", sans-serif;}

#bgColor {
height : 700px;
background : #33FF33;
background : linear-gradient(#ff8000, #ffffff, #008000);}

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Float the list items side by side */
ul.tab li {float: left;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: centre;
    padding: 14px 20px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 10px;
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: #ddd;
}
/* Create an active/current tablink class */
ul.tab li a:focus, .active {
    background-color: #ccc;
}



/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
    border: 1px solid #ccc;
    border-top: none;
}

@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}


 	.main{
                width: 960px;
                height: auto;
                //background-color: aliceblue;
            }
            #sub{
                
                width: 600px;
                height: auto;
            }



</style>
</head>


<body id="bgColor">
<form enctype="application/json" method="post" action="http://arunabhverma.com/insignia/handleins.php">
<table class="main">

<tr>
<td>
Report Number
</td>
<td>
<input type="text" name="r" placeholder="Report Number">
</td>
</tr>

</table>


<ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks active" onclick="openDetail(event, &#39;Thana&#39;)" id="defaultOpen">A.THANA DETAIL</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openDetail(event, &#39;Section&#39;)">B.SECTION DETAIL</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openDetail(event, &#39;Event&#39;)">C.EVENT DETAIL</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openDetail(event, &#39;PlaceOfOccurence&#39;)">D.PLACE OF OCCURANCE DETAIL</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openDetail(event, &#39;Complainant&#39;)">E.COMPLAINANT DETAIL</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openDetail(event, &#39;Suspect&#39;)">F.SUSPECT DETAIL</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openDetail(event, &#39;Property&#39;)">G.PROPERTY DETAIL</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openDetail(event, &#39;Inquest&#39;)">H.INQUEST DETAIL</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openDetail(event, &#39;FIRSummary&#39;)">I.FIRST IMPORTANT REPORT SUMMARY</a></li>
 <li><a href="javascript:void(0)" class="tablinks" onclick="openDetail(event, &#39;Accuse&#39;)">J.ACCUSE DETAIL</a></li>
 <li><a href="javascript:void(0)" class="tablinks" onclick="openDetail(event, &#39;Recovery&#39;)">K.RECOVERY DETAIL</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openDetail(event, &#39;Investigation&#39;)">L.INVESTIGATION DETAIL</a></li>
<li><a href="javascript:void(0)" class="tablinks" onclick="openDetail(event, &#39;Completion&#39;)">M.COMPLETION DETAIL</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openDetail(event, &#39;Court&#39;)">N.COURT DETAIL</a></li>
 </ul>


<table id="Thana" class="tabcontent" style="display: block;">
 	<tbody><tr class="main">
	
                    <td>
                      District of Information
                    </td>
                    <td>
                        <input type="text" name="A0" placeholder="District">
                    </td>    
                    </tr> 
                
                      <tr class="main">
                    <td>
                      Thana of Information
                    </td>
                    <td>
                        <input type="text" name="A1" placeholder="Thana">
                    </td>    
                    </tr> 
                
                    <tr class="main">
                    <td>
                      Year of Information
                    </td>
                    <td>
                        <input type="text" name="A2" placeholder="Year">
                    </td>    
                    </tr> 
                
                  <tr class="main">
                    <td>
                      FIR No. of Information
                    </td>
                    <td>
                        <input type="text" name="A3" placeholder="FIR No.">
                    </td>    
                    </tr> 
                
</tbody></table>
<table id="Section" class="tabcontent" style="display: none;">
 	                    <tbody><tr class="main">
                    <td>
                      IPC
                    </td>
                    <td>
                        <input type="text" name="B0" placeholder="IPC">
                    </td>    
                    </tr> 
                
                      <tr class="main">
                    <td>
                      Minor Act
                    </td>
                    <td>
                        <input type="text" name="B1" placeholder="Minor Act">
                    </td>    
                    </tr> 
                
                    <tr class="main">
                    <td>
                      Similar for more minor Acts
                    </td>
                    <td>
                        <input type="text" name="B2" placeholder="Minor Acts">
                    </td>    
                    </tr> 
                
</tbody></table>

<table id="Event" class="tabcontent" style="display: none;">
                    <tbody><tr class="main">
                    <td>
                      Day of Event
                    </td>
                    <td>
                        <input type="text" name="C0" placeholder="Day of Event">
                    </td>    
                    </tr> 
                
                      <tr class="main">
                    <td>
                      Date of Event
                    </td>
                    <td>
                        <input type="text" name="C1" placeholder="Date of Event">
                    </td>    
                    </tr> 
                
                    <tr class="main">
                    <td>
                      Time of Event
                    </td>
                    <td>
                        <input type="text" name="C2" placeholder="Time of Event">
                    </td>    
                    </tr> 
                
                  <tr class="main">
                    <td>
                      Date of Information at Thana
                    </td>
                    <td>
                        <input type="text" name="C3" placeholder="Date of Information at Thana">
                    </td>    
                    </tr> 
                
                 <tr class="main">
                    <td>
                      Time of Information at Thana
                    </td>
                    <td>
                        <input type="text" name="C4" placeholder="Time of Information at Thana">
                    </td>    
                    </tr> 
              
                <tr class="main">
                    <td>
                      Case Diary No.
                    </td>
                    <td>
                        <input type="text" name="C5" placeholder="Case Diary No.">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                    Case Diary time
                    </td>
                    <td>
                        <input type="text" name="C6" placeholder="Case Diary time">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                      Type of Information 
                    </td>
                    <td>
                        <input type="text" name="C7" placeholder="Type of Information ">
                    </td>    
                    </tr> 
                
</tbody></table>


<table id="PlaceOfOccurence" class="tabcontent" style="display: none;">

                    <tbody><tr class="main">
                    <td>
                      Distance from Thana
                    </td>
                    <td>
                        <input type="text" name="D0" placeholder="Distance from Thana">
                    </td>    
                    </tr> 
                
                      <tr class="main">
                    <td>
                      Direction From Thana
                    </td>
                    <td>
                        <input type="text" name="D1" placeholder="Direction From Thana">
                    </td>    
                    </tr> 
                
                    <tr class="main">
                    <td>
                      Name of Occurance Place
                    </td>
                    <td>
                        <input type="text" name="D2" placeholder="Name of Occurance Place">
                    </td>    
                    </tr> 
                
                  <tr class="main">
                    <td>
                      Thana of Occurance Place
                    </td>
                    <td>
                        <input type="text" name="D3" placeholder="Thana of Occurance Place">
                    </td>    
                    </tr> 
                
                 <tr class="main">
                    <td>
                      District of Occurance Place
                    </td>
                    <td>
                        <input type="text" name="D4" placeholder="District of Occurance Place">
                    </td>    
                    </tr> 
              
                <tr class="main">
                    <td>
                      State of Occurance Place
                    </td>
                    <td>
                        <input type="text" name="D5" placeholder="State of Occurance Place">
                    </td>    
                    </tr> 
                
</tbody></table>

<table id="Complainant" class="tabcontent" style="display: none;">

                    <tbody><tr class="main">
                    <td>
                      First name of the complainant
                    </td>
                    <td>
                        <input type="text" name="E0" placeholder="First name of the complainant">
                    </td>    
                    </tr> 
                
                      <tr class="main">
                    <td>
                      Middle name of the complainant
                    </td>
                    <td>
                        <input type="text" name="E1" placeholder="Middle name of the complainant">
                    </td>    
                    </tr> 
                
                    <tr class="main">
                    <td>
                      Last name of the complainant
                    </td>
                    <td>
                        <input type="text" name="E2" placeholder="Last name of the complainant">
                    </td>    
                    </tr> 
                
                  <tr class="main">
                    <td>
                      Alias 1 of the Complainant
                    </td>
                    <td>
                        <input type="text" name="E3" placeholder="Alias 1 of the Complainant">
                    </td>    
                    </tr> 
                
                 <tr class="main">
                    <td>
                      Alias 2 of the Complainant
                    </td>
                    <td>
                        <input type="text" name="E4" placeholder="Alias 2 of the Complainant">
                    </td>    
                    </tr> 
              
                <tr class="main">
                    <td>
                      First name of father of the complainant
                    </td>
                    <td>
                        <input type="text" name="E5" placeholder="First name of father of the complainant">
                    </td>    
                    </tr> 
                
                
                <tr class="main">
                    <td>
                      Middle name of father of the complainant
                    </td>
                    <td>
                        <input type="text" name="E6" placeholder="Middle name of father of the complainant">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                    Last name of father of the complainant
                    </td>
                    <td>
                        <input type="text" name="E7" placeholder="Last name of father of the complainant">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       Age of the complainant
                    </td>
                    <td>
                        <input type="text" name="E8" placeholder="Age of the complainant">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       Gender of the complainant
                    </td>
                    <td>
                        <input type="text" name="E9" placeholder="Gender of the complainant">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       Date of Birth of the complainant
                    </td>
                    <td>
                        <input type="text" name="E10" placeholder="Date of Birth of the complainant">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       Nationality of the complainant
                    </td>
                    <td>
                        <input type="text" name="E11" placeholder="Nationality of the complainant">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       Profession of the complainant
                    </td>
                    <td>
                        <input type="text" name="E12" placeholder="Profession of the complainant">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       Residence or Village of complaint of the complainant
                    </td>
                    <td>
                        <input type="text" name="E13" placeholder="Residence or Village of complaint of the complainant">
                    </td>    
                    </tr> 
                
                <tr ctdlass="main">
                    <td>
                       Thana of the complainant
                    </td>
                    <td>
                        <input type="text" name="E14" placeholder="Thana of the complainant">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                     District of the complainant
                    </td>
                    <td>
                        <input type="text" name="E15" placeholder="District of the complainant">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       State of the complainant
                    </td>
                    <td>
                        <input type="text" name="E16" placeholder="State of the complainant">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       Any Delay in giving Information by complainant
                    </td>
                    <td>
                        <input type="text" name="E17" placeholder="Any Delay in giving Information by complainant">
                    </td>    
                    </tr> 
                
</tbody></table>

<table id="Suspect" class="tabcontent" style="display: none;">

                   <tbody><tr class="main">
                    <td>
                      First name of Suspect 
                    </td>
                    <td>
                        <input type="text" name="F0" placeholder="First name of Suspect ">
                    </td>    
                    </tr> 
                
                      <tr class="main">
                    <td>
                      Middle name of the Suspect
                    </td>
                    <td>
                        <input type="text" name="F1" placeholder="Middle name of the Suspect">
                    </td>    
                    </tr> 
                
                    <tr class="main">
                    <td>
                      Last name of the Suspect
                    </td>
                    <td>
                        <input type="text" name="F2" placeholder="Last name of the Suspect">
                    </td>    
                    </tr> 
                
                  <tr class="main">
                    <td>
                      Alias 1 of the Suspect
                    </td>
                    <td>
                        <input type="text" name="F3" placeholder="Alias 1 of the Suspect">
                    </td>    
                    </tr> 
                
                 <tr class="main">
                    <td>
                      Alias 2 of the Suspect
                    </td>
                    <td>
                        <input type="text" name="F4" placeholder="Alias 2 of the Suspect">
                    </td>    
                    </tr> 
              
                <tr class="main">
                    <td>
                      First name of father of the Suspect
                    </td>
                    <td>
                        <input type="text" name="F5" placeholder="First name of father of the Suspect">
                    </td>    
                    </tr> 
                
                
                <tr class="main">
                    <td>
                      Middle name of father of the Suspect
                    </td>
                    <td>
                        <input type="text" name="F6" placeholder="Middle name of father of the Suspect">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                    Last name of father of the Suspect
                    </td>
                    <td>
                        <input type="text" name="F7" placeholder="Last name of father of the Suspect">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       Age of the Suspect
                    </td>
                    <td>
                        <input type="text" name="F8" placeholder="Age of the Suspect">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       Gender of the Suspect
                    </td>
                    <td>
                        <input type="text" name="F9" placeholder="Gender of the Suspect">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       Residence or Village of Suspect
                    </td>
                    <td>
                        <input type="text" name="F10" placeholder="Residence or Village of Suspect">
                    </td>    
                 </tr> 
                
                <tr class="main">
                    <td>
                       Thana of the Suspect
                    </td>
                    <td>
                        <input type="text" name="F11" placeholder="Thana of the Suspect">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                     District of the Suspect
                    </td>
                    <td>
                        <input type="text" name="F12" placeholder="District of the Suspect">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       State of the Suspect
                    </td>
                    <td>
                        <input type="text" name="F13" placeholder="State of the Suspect">
                    </td>    
                    </tr> 


                
</tbody></table>

<table id="Property" class="tabcontent" style="display: none;">

                    <tbody><tr class="main">
                    <td>
                     List of Property Lost
                    </td>
                    <td>
                        <input type="text" name="G0" placeholder="List of Property Lost">
                    </td>    
                    </tr> 
                
                      <tr class="main">
                    <td>
                      List of Property Lost
                    </td>
                    <td>
                        <input type="text" name="G1" placeholder="List of Property Lost">
                    </td>    
                    </tr> 
                
                    <tr class="main">
                    <td>
                      Type of Modus Operandi
                    </td>
                    <td>
                        <input type="text" name="G2" placeholder="Type of Modus Operandi">
                    </td>    
                    </tr> 
                
</tbody></table>

<table id="Inquest" class="tabcontent" style="display: none;">

                    <tbody><tr class="main">
                    <td>
                     Inquest No.
                    </td>
                    <td>
                        <input type="text" name="H0" placeholder="Inquest No.">
                    </td>    
                    </tr> 
                
                      <tr class="main">
                    <td>
                      Inquest Date
                    </td>
                    <td>
                        <input type="text" name="H1" placeholder="Inquest Date">
                    </td>    
                    </tr> 
                
                    <tr class="main">
                    <td>
                      Inquest Time
                    </td>
                    <td>
                        <input type="text" name="H2" placeholder="Inquest Time">
                    </td>    
                    </tr> 
            
                    
                    <tr class="main">
                    <td>
                      Inquest Summary
                    </td>
                    <td>
                        <input type="text" name="H2" placeholder="Inquest Summary">
                    </td>    
                    </tr> 

                
</tbody></table>

<table id="FIRSummary" class="tabcontent" style="display: none;">

                   <tbody><tr class="main">
                    <td>
                       
                        <input type="file" name="I0">
                    </td>    
                    </tr> 
 </tbody></table>       
            
<table id="Accuse" class="tabcontent" style="display: none;">
                
                    <tbody><tr class="main">
                    <td>
                      First name of Accuse 
                    </td>
                    <td>
                        <input type="text" name="J0" placeholder="First name of Accuse ">
                    </td>    
                    </tr> 
                
                      <tr class="main">
                    <td>
                      Middle name of the Accuse
                    </td>
                    <td>
                        <input type="text" name="J1" placeholder="Middle name of the Accuse">
                    </td>    
                    </tr> 
                
                    <tr class="main">
                    <td>
                      Last name of the Accuse
                    </td>
                    <td>
                        <input type="text" name="J2" placeholder="Last name of the Accuse">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       Age of the Accuse
                    </td>
                    <td>
                        <input type="text" name="J3" placeholder="Age of the Accuse">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       Gender of the Accuse
                    </td>
                    <td>
                        <input type="text" name="J4" placeholder="Gender of the Accuse">
                    </td>    
                    </tr> 
                
                  <tr class="main">
                    <td>
                      Alias 1 of the Accuse
                    </td>
                    <td>
                        <input type="text" name="J5" placeholder="Alias 1 of the Accuse">
                    </td>    
                    </tr> 
                
                 <tr class="main">
                    <td>
                       Alias 1 of the Accuse
                    </td>
                    <td>
                        <input type="text" name="J6" placeholder="Alias 1 of the Accuse">
                    </td>    
                    </tr> 
              
                <tr class="main">
                    <td>
                      First name of father of the Accuse
                    </td>
                    <td>
                        <input type="text" name="J7" placeholder="First name of father of the Accuse">
                    </td>    
                    </tr> 
                
                
                <tr class="main">
                    <td>
                      Middle name of father of the Accuse
                    </td>
                    <td>
                        <input type="text" name="J8" placeholder="Middle name of father of the Accuse">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                    Last name of father of the Accuse
                    </td>
                    <td>
                        <input type="text" name="J9" placeholder="Last name of father of the Accuse">
                    </td>    
                    </tr> 
                
                
                <tr class="main">
                    <td>
                       Residence or Village of Accuse
                    </td>
                    <td>
                        <input type="text" name="J10" placeholder="Residence or Village of Accuse">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       Thana of the Accuse
                    </td>
                    <td>
                        <input type="text" name="J11" placeholder="Thana of the Accuse">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                     District of the Accuse
                    </td>
                    <td>
                        <input type="text" name="J12" placeholder="District of the Accuse">
                    </td>    
                    </tr> 
                
                <tr class="main">
                    <td>
                       State of the Accuse
                    </td>
                    <td>
                        <input type="text" name="J13" placeholder="State of the Accuse">
                    </td>    
                    </tr> 
                                
            <tr class="main">
                    <td>
                       Photo of the Accuse
                    </td>
                    <td>
                        <input type="text" name="J14" placeholder="Photo of the Accuse">
                    </td>    
                    </tr> 
                                
                <tr class="main">
                    <td>
                       Finger Print of the Accuse
                    </td>
                    <td>
                        <input type="text" name="J15" placeholder="Finger Print of the Accuse">
                    </td>    
                    </tr> 
                
</tbody></table>

<table id="Recovery" class="tabcontent" style="display: none;">

                    <tbody><tr class="main">
                    <td>
                      List of Recovered Property
                    </td>
                    <td>
                        <input type="text" name="K0" placeholder="List of Recovered Property">
                    </td>    
                    </tr> 
                
                      <tr class="main">
                    <td>
                      Value of Recovered Property
                    </td>
                    <td>
                        <input type="text" name="K1" placeholder="Value of Recovered Property">
                    </td>    
                    </tr> 

                
</tbody></table>

<table id="Investigation" class="tabcontent" style="display: none;">
                    <tbody><tr class="main">
                    <td>
                      Name of the Investigation Officer 
                    </td>
                    <td>
                        <input type="text" name="L0" placeholder="Name of the Investigation Officer ">
                    </td>    
                    </tr> 
                

                
</tbody></table>

<table id="Completion" class="tabcontent" style="display: none;">

                    <tbody><tr class="main">
                    <td>
                      Final Report
                    </td>
                    <td>
                        <input type="text" name="M0" placeholder="Final Report">
                    </td>    
                    </tr> 
                
                      <tr class="main">
                    <td>
                      Final Report No.
                    </td>
                    <td>
                        <input type="text" name="M1" placeholder="Final Report No.">
                    </td>    
                    </tr> 
                
                
                      <tr class="main">
                    <td>
                      Final Report Date
                    </td>
                    <td>
                        <input type="date" name="M2" placeholder="Final Report Date">
                    </td>    
                    </tr> 
                
                
</tbody></table>

<table id="Court" class="tabcontent" style="display: none;">
                    <tbody><tr class="main">
                    <td>
                      Date of Admission in Court
                    </td>
                    <td>
                        <input type="text" name="N0" placeholder="Date of Admission in Court">
                    </td>    
                    </tr> 
                
                      <tr class="main">
                    <td>
                      No. of Admission in Court
                    </td>
                    <td>
                        <input type="text" name="N1" placeholder="No. of Admission in Court">
                    </td>    
                    </tr>

                
</tbody></table>
            <section>
                    <div>
                    <input type="submit" placeholder="Submit">
                    </div>            
            </section>



<script>
function openDetail(evt, detailName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(detailName).style.display = "block";
    evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


</script>



 


</form></body></html>
