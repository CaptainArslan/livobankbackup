@extends('layouts.app')
@section('content')
<h1>Notifications Settings</h1>
<br />

<!-- Push Notifications -->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <b>Push Notifications</b>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <!-- Content with Toggle button as the content -->
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <b>Money</b>
                            </td>
                        </tr>
                        <tr>
                            <td>Bank Transfer</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Payment Recieved</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Payment Sent</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Charge Request Recieved</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Friend Payments</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Purchases</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Direct Deposit Recieved</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Crypto</b>
                            </td>
                        </tr>
                        <tr>
                            <td>Transactions</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                        <!-- Price Alerts -->
                        <tr>
                            <td>Price Alerts</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Text Notification -->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <b>Text Notifications</b>
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td colspan="2">
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Email Notification -->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <b>Email Notifications</b>
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <b>Security</b>
                            </td>
                        </tr>
                        <tr>
                            <td>Login Attempted</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Add Remembered Device</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Money</b>
                            </td>
                        </tr>
                        <tr>
                            <td>Payment Recieved</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Charge Request Requested</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Charge Request Rejected</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Charge Request Canceled</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Direct Deposit Recieved</td>
                            <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox">
                                    <div class="toggle-switch"></div>
                                    <span class="toggle-label"></span>
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection