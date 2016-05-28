<?php
/**
 * Created by PhpStorm.
 * User: project
 * Date: 5/28/2016
 * Time: 6:31 PM
 */
header( 'Content-Type: text/html; charset=utf-8' );
session_start();
if(isset($_SESSION['language'])){
    $lan = $_SESSION['language'];
}else{
    $lan = "SI";
}
$textarray = array(
    //head and navigation bar
    "Royce Fernando"=> "රොයිස් ප්‍රනාන්දු",
    "Official Web Site" => "වෙබ් අඩවිය",
    "Home" => "මුල් පිටුව",
    "Biography" => "චරිතාපදානය",
    "News" => "පුවත්",
    "My Story" => "මගේ කතාව",
    "Gallery"=>"පින්තූර",
    "Private Gallery"=>"පෞද්ගලික",
    "Public Gallery"=>"මහජන",
    "Contact"=>"විමසීම්",
    //Footer
    "Royce Wijitha Fernando"=>"රොයිස් විජිත ප්‍රනාන්දු",
    "All Rights Reserved"=>"සියලුම හිමිකම් ඇවිරිණි",
    //INDEX PAGE
    "Other News" => "තවත් පුවත්",
    "Latest News" => "නවතම පුවත",
    "Read More"=>"වැඩි විස්තර",
    "Youtube Channel"=>"වීඩියෝ",
    "Facebook Page"=>"ෆේස්බුක් සමාජය",
    "Twitter Page"=>"ට්විටර් පණිවිඩ",
    "Tweets by" => "ට්විටර් ගිණුම",
    "Google+ Account"=>"ගූගල්+ සමාජය",
    "My Brief"=>"මම",
    "My Mission"=>"මාගේ අරමුණ",
    "My Vision"=>"මාගේ දැක්ම",
    //NEWS PAGE
    //"Read More"=>"වැඩි විස්තර",
    "Previous Page"=>"පෙර පිටුව",
    "Next Page"=>"මීලග පිටුව",
    //NEWS ITEM PAGE
    "Back"=>"පෙර",
    "See more images about this Post"=>"මේ හා සම්බන්ද පින්තූර",
    "View"=>"බලන්න",
    //BIOGRAPHY PAGE
    "My Biography"=>"මාගේ චරිතාපදානය",
    //MYSTORY PAGE
    //"My Story" => "මගේ කතාව",
    "My Familiy"=>"පවුලේ විස්තර",
    "My Education"=>"අධ්‍යාපනික විස්තර",
    "My Career"=>"වෘත්තීය විස්තර",
    "My Target"=>"අරමුණු",
    //PRIVATE GALLERY PAGE
    "Private Gallery "=>"පෞද්ගලික ඡායාරූප",
    "Public Gallery "=>"මහජන ඡායාරූප",
    //CONTACT PAGE
    "How to Meet Me ?"=>"හමුවීම සදහා",
    ""=>"",

);
$paragraphs = array(
    "footer_EN"=>"© 2016 Royce Wijitha Fernando. All Rights Reserved.",
    "footer_SI"=>"© 2016 රොයිස් විජිත ප්‍රනාන්දු. සියලුම හිමිකම් ඇවිරිණි.",
    //INDEX
    "para1_EN"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam",
    "para1_SI"=>"මානව චරිත ස්වභාවය, පුද්ගල රුචි අරුචිකම්, සංඥාවන්ගේ විවිධතා හා ජානමය තත්ව <br> අනුව එක් එක් පුද්ගලයාගේ නිවැරදි මගට",
    "para2_EN"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut",
    "para2_SI"=>"මානව චරිත ස්වභාවය, පුද්ගල රුචි අරුචිකම්, සංඥාවන්ගේ විවිධතා හා ජානමය තත්ව",
    "para3_EN"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut",
    "para3_SI"=>"මානව චරිත ස්වභාවය, පුද්ගල රුචි අරුචිකම්, සංඥාවන්ගේ විවිධතා හා ජානමය තත්ව",
    //BIOGRAPHY
    "para4_EN"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.",
    "para4_SI"=>"ජ්‍ය මහාචාර්යය වල්පොළ ශ්‍රී රාහුල මහා තෙරුන් (1907-1997) යනු බෞද්ධ භික්ෂුවක්, පඬිවරයෙකු සහ ලේඛකයෙකු වූහ. උන්වහන්සේ 20වන සියවසෙහි ශ්‍රී ලාංකීක ප්‍රාඥයන් අතුරින් ප්‍රමුඛයෙක් ලෙස සැලකේ. 1964දී උන්වහන්සේ, නෝර්ත්වෙස්ටර්න් විශ්ව විද්‍යාලයෙහි, ඉතිහාසය හා ආගම් පිළිබඳ මහාචාර්යය පදවියට පත් වීමෙන්, බටහිර ලෝකයෙහි මහාචාර්යය ධුරන්දර තනතුරක් හෙබවීමට වරම් ලැබූ පළමු භික්ෂුව වූ සේක. උන්වහන්සේ වරෙක එකල විද්‍යෝදය විශ්ව විද්‍යාලයෙහි (දැනට ශ්‍රී ජයවර්ධනපුර විශ්වවිද්‍යාලය ලෙස වැහැරේ) උප-කුලපති පදවිය හෙබවූහ. උන්වහන්සේ බුද්ධාගම පිළිබඳව ඉංග්‍රීසියෙන්, ප්‍රංශ බසින්, හා සිංහලයෙන් පුළුල් ලෙස ගත්කතුවරණයෙහි යෙදී ඇත . පූජ්‍ය තෙරුන්වහන්සේ විසින් රචිත වට් ද බුද්ධා ටෝට් (සිංහල පරිවර්තනය “බුදුන් වදාල ධර්මය” ) ග්‍රන්ථය, බොහෝ දෙනෙකු දකින්නේ ථෙරවාද බුද්ධාගම [1] පිළිබඳ ලියැවී ඇති ඉස්තරම් පොත් කිහිපය අතුරින් එකක් ලෙසය.",
    //MYSTORY
    "para5_EN"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ",
    "para5_SI"=>"ජ්‍ය මහාචාර්යය වල්පොළ ශ්‍රී රාහුල මහා තෙරුන් (1907-1997) යනු බෞද්ධ භික්ෂුවක්, ප",
);
function translate($sentence,$lan){
    global $textarray;
    if($lan=="SI"){
        return $textarray[$sentence];
    }
    return $sentence;
}
function getPara($para,$lan){
    global $paragraphs;
    if($lan=="SI"){
        return $paragraphs[$para."_SI"];
    }
    return $paragraphs[$para."_EN"];
}
function getImageTranslation($name,$lan){
    if($lan=="SI"){
        return $name.'_SI';
    }
    return $name;
}