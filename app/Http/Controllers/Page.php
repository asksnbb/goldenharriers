<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Download;
use App\Models\Academiceventgallery;
use App\Models\Culturaleventgallery;
use App\Models\Sportseventgallery;
use App\Models\Educationaleventgallery;
use App\Models\Circular;
use App\Models\Datesheet;












class Page extends Controller
{
    public function index(){
        $data = array(
            'title'=>'Golden Harrier School - Jakhauli,Sonepat,Haryana',
            'description'=>'Golden Harrier School - Jakhauli,Sonepat,Haryana'
            );
        return view('welcome',$data);     
    }

    public function aboutschool(){
        $data = array(
            'title'=>'About Golden Harrier School',
            'description'=>'About Golden Harrier School'
            );
        return view('aboutschool',$data); 
    }

    public function chairmanmessage(){
        $data = array(
            'title'=>'Chairman Message to Students',
            'description'=>'Chairman Message to Students'
            );
        return view('chairmanmessage',$data); 
    }

    public function mdmessage(){
        $data = array(
            'title'=>'MD Message to Students',
            'description'=>'MD Message to Students'
            );
        return view('mdmessage',$data); 
    }

    public function principalmessage(){
        $data = array(
            'title'=>'Principal Message to Students',
            'description'=>'Principal Message to Students'
            );
        return view('principalmessage',$data); 
    }

    public function faculty(){
        $faculty = Faculty::all();
       // dd($faculty);
        $data = array(
            'title'=>'Faculties at Golden Harrier School',
            'description'=>'Faculties at Golden Harrier School',
            'faculty' => $faculty
            );
        return view('faculty',$data); 
    }

    public function schoolrules(){
        $data = array(
            'title'=>'Rules at Golden Harrier School',
            'description'=>'Rules at Golden Harrier School'
            );
        return view('schoolrules',$data); 
    }

    public function schoolinfo(){
        $data = array(
            'title'=>'Golden Harrier School Information',
            'description'=>'Golden Harrier School Information'
            );
        return view('schoolinfo',$data); 
    }

    public function studentdetails(){
        $data = array(
            'title'=>'Golden Harrier School Student Details',
            'description'=>'Golden Harrier School Student Details'
            );
        return view('studentdetails',$data); 
    }

    public function annualreport(){
        $data = array(
            'title'=>'Golden Harrier School Annual Report',
            'description'=>'Golden Harrier School Annual Report'
            );
        return view('annualreport',$data); 
    }

    public function mdisclosure(){
        $data = array(
            'title'=>'Golden Harrier School mdisclosure',
            'description'=>'Golden Harrier School mdisclosure'
            );
        return view('mdisclosure',$data); 
    }

    public function downloadlist(){
        $downloads = Download::all();
        $data = array(
            'title'=>'Golden Harrier School Downloads',
            'description'=>'Golden Harrier School downloads',
            'downloads' => $downloads
            );
        return view('downloadlist',$data);
    }

    public function reachus(){
        $data = array(
            'title'=>'Contact us',
            'description'=>'Contact us'
            );
        return view('reachus',$data);
    }

    public function careers(){
        $data = array(
            'title'=>'Careers',
            'description'=>'Careers'
            );
        return view('careers',$data);
    }

    public function academicgallery(){
        $academiceventgallery = Academiceventgallery::all();
        $data = array(
            'title'=>'Academic Gallery',
            'description'=>'Academic Gallery',
            'academiceventgallery'=>$academiceventgallery
            );
        return view('academicgallery',$data);
    }

    public function culturalgallery(){
        $culturaleventgallery = Culturaleventgallery::all();
        $data = array(
            'title'=>'Cultural Gallery',
            'description'=>'Cultural Gallery',
            'culturalgallery'=>$culturaleventgallery
            );
        return view('culturalgallery',$data);
    }

    public function sportsgallery(){
        $sportseventgallery = Sportseventgallery::all();
        $data = array(
            'title'=>'Sports Gallery',
            'description'=>'Sports Gallery',
            'sportsgallery'=>$sportseventgallery
            );
        return view('sportsgallery',$data);
    }

    public function educationalgallery(){
        $educationaleventgallery = Educationaleventgallery::all();
        $data = array(
            'title'=>'Educational Gallery',
            'description'=>'Educational Gallery',
            'educationalgallery'=>$educationaleventgallery
            );
        return view('educationalgallery',$data);
    }

    public function admissionprocess(){
        $data = array(
            'title'=>'Golden Harrier School Admission Process',
            'description'=>'Golden Harrier School Admission Process'
            );
        return view('admissionprocess',$data); 
    }

    public function feeschedule(){
        $data = array(
            'title'=>'Golden Harrier School Fees Schedule',
            'description'=>'Golden Harrier School Fees Schedule'
            );
        return view('feeschedule',$data); 
    }

    public function schooltimings(){
        $data = array(
            'title'=>'Golden Harrier School Timings',
            'description'=>'Golden Harrier School Timings'
            );
        return view('schooltimings',$data); 
    }

    public function circular(){
        $circulars = Circular::all();
        $data = array(
            'title'=>'Golden Harrier School Circular',
            'description'=>'Golden Harrier School Circular',
            'circulars'=>$circulars
            );
        return view('circulars',$data); 
    }

    public function datesheets(){
        $datesheets = Datesheet::all();
        $data = array(
            'title'=>'Golden Harrier School Datesheets',
            'description'=>'Golden Harrier School Datesheets',
            'datesheets'=>$datesheets
            );
        return view('datesheets',$data); 
    }


    public function laboratories(){
        $data = array(
            'title'=>'Golden Harrier School Laboratories',
            'description'=>'Golden Harrier School Laboratories'
            );
        return view('laboratories',$data); 
    }

    public function computerlab(){
        $data = array(
            'title'=>'Golden Harrier School Computer Labs',
            'description'=>'Golden Harrier School Computer Labs'
            );
        return view('computer-lab',$data); 
    }

    public function library(){
        $data = array(
            'title'=>'Golden Harrier School library',
            'description'=>'Golden Harrier School library'
            );
        return view('library',$data); 
    }

    public function smartclass(){
        $data = array(
            'title'=>'Golden Harrier School smart class',
            'description'=>'Golden Harrier School smart class'
            );
        return view('smartclass',$data); 
    }


    public function artcraft(){
        $data = array(
            'title'=>'Golden Harrier School artcraft',
            'description'=>'Golden Harrier School artcraft'
            );
        return view('artcraft',$data); 
    }


    public function danceroom(){
        $data = array(
            'title'=>'Golden Harrier School danceroom',
            'description'=>'Golden Harrier School danceroom'
            );
        return view('danceroom',$data); 
    }

    public function playground(){
        $data = array(
            'title'=>'Golden Harrier School playground',
            'description'=>'Golden Harrier School playground'
            );
        return view('playground',$data); 
    }

    public function clubs(){
        $data = array(
            'title'=>'Golden Harrier School clubs',
            'description'=>'Golden Harrier School clubs'
            );
        return view('clubs',$data); 
    }

    public function transports(){
        $data = array(
            'title'=>'Golden Harrier School transports',
            'description'=>'Golden Harrier School transports'
            );
        return view('transports',$data); 
    }



    /* CBSE Work*/

     public function affiliationletter(){
        $data = array(
            'title'=>'School Affiliation Letter',
            'description'=>'School Affiliation Letter',
            'image'=>'https://i.imgur.com/3nu3r8E.jpg'
            );
        return view('affiliationletter',$data); 
    }


    public function trustcertificate(){
        $data = array(
            'title'=>'School Trust Certificate',
            'description'=>'School Trust Certificate',
            'image'=>'https://i.imgur.com/tkNWsjE.jpg'

            );
        return view('trustcertificate',$data); 
    }

    public function noc(){
        $data = array(
            'title'=>'School NOC',
            'description'=>'School NOC',
            'image'=>'/3-certificate-noc.pdf'
            );
        return view('noc',$data); 
    }

    public function deonoc(){
        $data = array(
            'title'=>'School DEO NOC',
            'description'=>'School DEO NOC',
            'image'=>'/3a-certificate-noc.pdf'
            );
        return view('deonoc',$data); 
    }

    public function deonocaff(){
        $data = array(
            'title'=>'DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR AFFILIATION',
            'description'=>'DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR AFFILIATION',
            'image'=>'/point-7-deo-certificate-new.pdf'
            );
        return view('deonocaff',$data); 
    }

    public function recognitioncertificate(){
        $data = array(
            'title'=>'School Recognition Certificate',
            'description'=>'School Recognition Certificate',
            'image'=>'affiliation-1st-to-12th.pdf'
            );
        return view('recognitioncertificate',$data); 
    }

    public function smc(){
        $data = array(
            'title'=>'School Management COMMITTEE',
            'description'=>'School Management COMMITTEE',
            'image'=>'school-management-committee.pdf'
            );
        return view('smc',$data); 
    }

    public function ptamember(){
        $data = array(
            'title'=>'PARENTS TEACHERS ASSOCIATION(PTA) MEMBERS',
            'description'=>'PARENTS TEACHERS ASSOCIATION(PTA) MEMBERS',
            'image'=>'ptamember.pdf'
            );
        return view('ptamember',$data); 
    }

    public function buildingsafetycertificate(){
        $data = array(
            'title'=>'School Building Safety Certificate',
            'description'=>'School Building Safety Certificate',
            'image'=>'building-safety.pdf'
            );
        return view('buildingsafetycertificate',$data); 
    }


    public function firesafetycertificate(){
        $data = array(
            'title'=>'School Fire Safety Certificate',
            'description'=>'School Fire Safety Certificate',
            'image'=>'fire-safety.pdf'
            );
        return view('firesafetycertificate',$data); 
    }

   

    public function hygienecertificate(){
        $data = array(
            'title'=>'School hygiene certificate',
            'description'=>'School hygiene certificate',
            'image'=>'/point-8-water-certificate.pdf'
            );
        return view('hygienecertificate',$data); 
    }

    public function annualacademiccalender(){
        $data = array(
            'title'=>'School Annual Academic Calender',
            'description'=>'School Annual Academic Calender',
            'image'=>'academic-calendar-2024-25--final.pdf'
            );
        return view('annualacademiccalender',$data); 
    }

    


    
}
