@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">MENU CARD</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="inputAddress">Name</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Item name">
                                </div>
                                <div class="form-group ">
                                    <label for="inputState">Type</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Burger</option>
                                        <option>Drinks</option>
                                        <option>Snacks</option>
                                        <option>Pizza</option>
                                        <option>Tea</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Price</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Item Price">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="inputAddress2">Description</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Item Description">
                                </div>
                                   <div>
                                   <button  type="submit" class="btn btn-primary" class=" float-right">Enter</button>
                                   </div>

                            </div>


                        </form>
                </div>
            </div>

        </div>
    </div>
</div>
    <div class="container">
        <table class="table">
            <caption>List of users</caption>
            <thead>
            <tr>
                <th scope="col">Item name</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>

            </tbody>
        </table>
    </div>
@endsection
