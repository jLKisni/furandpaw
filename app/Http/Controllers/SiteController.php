<?php

namespace Furandpaws\Http\Controllers;

use Illuminate\Http\Request;

use Furandpaws\Http\Requests;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function petStore()
    {
        return view('petstore');
    }

    public function postSale()
    {
        return view('post-sale');
    }

    public function adopt()
    {
        return view('adopt');
    }

    public function breed()
    {
        return view('breed');
    }

    public function item()
    {
        return view('item');
    }

    public function profile()
    {
        return view('profile');
    }

    public function petClinics()
    {
        return view('pet-clinics');
    }

    public function clinicsProfile(){
        return view('clinics-profile');
    }

    public function memberProfile(){
        return view('member-profile');
    }
    //Profile views

    public function profileIndex(){
      return view('profile.index');
    }

    public function profileSettings(){
      return view('profile.profile-settings');
    }

    public function profileEdit(){
      return view('profile.profile-edit');
    }

    public function profileDelete(){
      return view('profile.profile-delete');
    }

    public function profileViewpets(){
      return view('profile.profile-viewpets');
    }

    public function profileChangephoto(){
      return view('profile.profile-changephoto');
    }

    public function profileChangecover(){
      return view('profile.profile-changecover');
    }

    public function profileSellpets(){
      return view('profile.profile-sellpets');
    }

    public function profileAddpets(){
      return view('profile.profile-addpets');
    }

    public function profilePetprofile(){
      return view('profile.profile-petprofile');
    }

    public function profileActivity(){
      return view('profile.profile-activity');
    }

    public function profileSearchmembers(){
      return view('profile.profile-searchmembers');
    }

    //clinics Views
    public function profilehome(){
      return view('vetshops.profile-edit');
    }

    public function vetshopsChangephoto(){
      return view('vetshops.profile-changephoto');
    }

    public function vetshopsChangecover(){
      return view('vetshops.profile-changecover');
    }

    public function vetshopsAbout(){
      return view('vetshops.profile-about');
    }

    public function vetshopsViewpost(){
      return view('vetshops.profile-viewpost');
    }

    public function vetshopsSellproducts(){
      return view('vetshops.profile-sellproducts');
    }

    //Admin page view

    public function adminLogin(){
      return view('layouts.admin-login');
    }

    public function adminIndex(){
      return view('admin.index');
    }

    public function manageProfile(){
      return view('admin.manageProfile');
    }

    public function enthusiast(){
      return view('admin.enthusiast');
    }

    public function petshops(){
      return view('admin.petshops');
    }

    public function vetclinics(){
      return view('admin.vetclinics');
    }

    public function petshopSubscription(){
      return view('admin.petshop-subscription');
    }

    public function vetclinicSubscription(){
      return view('admin.vetclinic-subscription');
    }
}
