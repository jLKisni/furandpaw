@extends('layouts.profile')

@section('title', 'Sell Pets')


@section('content')
<div class="content-wrap">

    <div class="section-content" style="width:75%; margin:0 auto;padding:0 40px">
        <h3>Sell your preloved pets or pet accessories </h3>
        <hr>

        <div class="review-input" >

            <div class="review-label">
                <label>Pet photos: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="file" multiple>
            </div>

            <div class="clearfix"></div>
            <div class="review-label">
                <label>Pet/Accessories: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="text" placeholder="Name of the pets/Accessories">
            </div>

            <div class="review-label">
                <label>Choose Pet type: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <select style="width:25%">
                    <option value="#">Dog</option>
                    <option value="#">Cat</option>
                </select>
            </div>

            <div class="review-label">
                <label>Pet Breed: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="text" placeholder="Breed of your pet">
            </div>


            <div class="review-label">
                <label>Pet Gender: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <select style="width:25%">
                    <option value="#">Male</option>
                    <option value="#">Female</option>
                </select>
            </div>

            <div class="review-label">
                <label>Pet Color: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="text" placeholder="Pet Color... ">
            </div>

            <div class="review-label">
                <label>Contact no: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="text" placeholder="How can we contact you.. ">
            </div>

            <div class="review-label">
                <label>Document photos: <span style="color:red">*</span></label>
            </div>

            <div class="review-inputs">
                <input type="file" multiple>
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
