@extends('layouts.clinics')

@section('title', 'Sell Products')


@section('content')
<div class="content-wrap">

    <div class="section-content" style="width:75%; margin:0 auto;padding:0 40px">
        <h3>Post some pet products </h3>
        <hr>

        <div class="review-input" >

            <div class="review-label">
                <label>Product photos: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="file" multiple>
            </div>

            <div class="clearfix"></div>
            <div class="review-label">
                <label>Name: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="text" placeholder="Product Description...">
            </div>


            <div class="review-label">
                <label>Contact no: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="text" placeholder="How can we contact you.. ">
            </div>

            <div class="review-label">
                <label>Product type: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <select style="width:25%">
                    <option value="#">Accessories</option>
                    <option value="#">Service</option>
                </select>
            </div>


            <div class="review-label">
                <label>Document photos: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="file" multiple>
            </div>

            <div class="clearfix"></div>
            <br>

            <div class="alert alert-warning" role="alert">We are using your information on your about section for easily known by the other users and to keep track of your location</div>


            <h4>Add some description</h4>
            <textarea class="form-control" rows="7" cols="10" placeholder="Add some description...."></textarea>

            <br>
            <button class="btn-comment pull-left">Save Changes</button>


        </div>

        <div class="clearfix"></div>
    </div>

</div>

@endsection
