@extends('adminlte::page')

@section('content')
<style>
    h3 {
        font-family: Tahoma, Verdana, sans-serif;
        font-weight: bold;
      }
</style>
<div class="row justify-content-center">
    <div class="col-md">
        <div class="card ">
            <div class="card-header text-white bg-secondary"><h3 >{{ __('ADD BUILDING') }}</h3></div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <form>
                                @csrf
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Building Name :</label>
                                            <input  type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter building name."
                                                value="" required
                                                autocomplete="true" autofocus >
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Fm-Code :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your code."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Contact Name :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter contact name."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Phone :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="xxx-xxx-xxxx."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Area :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your area."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Number Layer :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your number layer."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Floor :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your floor."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Room Number :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your room."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Detail Adress :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Unit number, house number, building, street name."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Province :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your province."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="w3-text-blue">City :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your city."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Postal Code :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your postal code."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Zone :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your zone."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Latitude :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your latitude."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Longtude :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your longtude."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Price Square :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your price."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Working Time :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your latitude."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Balance :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your balance."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Developer :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your developer."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="w3-text-blue">Grade :</label>
                                            <input type="text" class="form-control" id="document_no" name="document_no"
                                                placeholder="Enter your grade."
                                                value="" required
                                                autocomplete="true" autofocus>
                                        </div>
                                    </div>
                                </div>
                           <input type="submit" value="Add Building " class="btn btn-primary">
                           <a href="/building" class="btn btn-success my-2">Back</a>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>               
   
@endsection