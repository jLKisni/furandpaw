@extends('layouts.profile')

@section('title', 'Add Pets')


@section('content')
<div class="content-wrap">

    <div class="section-content" style="width:75%; margin:0 auto;padding:0 40px">
            <h3>Add Details for your lovely pet </h3>
            <hr>

        <div class="review-input" >

            <div class="review-label">
                <label>Pet Name: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="text" placeholder="Name of your pet...">
            </div>

            <div class="review-label">
                <label>Breed: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="text" placeholder="Breed..">
            </div>

            <div class="review-label">
                <label>Age: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="text" placeholder="Age of your pet..">
            </div>

            <div class="review-label">
                <label>Pet Gender: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <select style="width:15%">
                    <option value="#">Male</option>
                    <option value="#">Female</option>
                </select>
            </div>


            <div class="review-label">
                <label>Pet Color: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="text" placeholder="Pet Color....">
            </div>


            <div class="review-label">
                <label>Upload photos: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="file">
            </div>

            <div class="clearfix"></div>

            <h4>Add some description</h4>
            <textarea class="form-control" rows="7" cols="10" placeholder="Add some description...."></textarea>

            <br>
            <button class="btn-comment pull-left">Save Changes</button>


        </div>

        <div class="clearfix"></div>
    </div>

</div>
@endsection
