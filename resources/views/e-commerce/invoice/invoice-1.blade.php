@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
    <div>
        <h2>Invoice-1</h2>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item f-w-500">E-commerce</li>
                <li class="breadcrumb-item f-w-500 active">Invoice-1</li>
            </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="card invoice-1">
        <div class="card-body">
            <table class="table-wrapper table table-borderless">
                <tbody>
                    <tr>
                        <td class="p-0">
                            <table class="table-wrapper table-responsive custom-scrollbar logo-wrapper">
                                <tbody>
                                    <tr>
                                        <td class="p-0"><img class="img-fluid for-light"
                                                src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"
                                                style="width:121px;"><img class="img-fluid for-dark"
                                                src="{{ asset('assets/images/logo/logo_dark.png') }}" alt="logo"
                                                style="width:121px;"><span
                                                style="color: var(--body-light-font-color);opacity: 0.8;display:block;margin-top: 10px;">202-555-0258</span>
                                        </td>
                                        <td class="p-0 address"
                                            style="text-align: right; color: var(--body-light-font-color);opacity: 0.8; width: 16%;">
                                            <span>
                                                1982 Harvest Lane New York, NY12210
                                                United State</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-0"> <img class="banner-image w-100"
                                src="{{ asset('assets/images/email-template/invoice-1/1.png') }}" alt="background"></td>
                    </tr>
                    <tr>
                        <td class="p-0">
                            <table class="bill-content" style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td class="p-0" style="width: 36%"><span
                                                style="color: var(--body-light-font-color);opacity: 0.8;">Billed
                                                To</span>
                                            <h6 style="width: 46%">yuri Matchett Vandelay Group LTD </h6>
                                        </td>
                                        <td class="p-0" style="width: 21%;"><span
                                                style="color: var(--body-light-font-color);opacity: 0.8;">Invoice
                                                Date</span>
                                            <h6>09/03/2024</h6>
                                        </td>
                                        <td class="p-0"><span
                                                style="color: var(--body-light-font-color);opacity: 0.8;">Invoice
                                                Number</span>
                                            <h6>#VL25000365</h6>
                                        </td>
                                        <td class="p-0" style="text-align: right;"><span
                                                style="color: var(--body-light-font-color);opacity: 0.8;">Amount Dus
                                                (USD)</span>
                                            <h2>$10,908.00</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0" style="width: 36%">
                                            <h6 style="width: 63%;padding-top: 20px;">2118 Thornridge Cir. Syracuse,
                                                Connecticut 35624, United State</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-0">
                            <table class="order-details"
                                style="width: 100%;border-collapse: separate;border-spacing: 0 10px;">
                                <thead>
                                    <tr
                                        style="background: #009DB5;border-radius: 8px;overflow: hidden;box-shadow: 0px 10.9412px 10.9412px rgb(0 157 181 / 4%), 0px 9.51387px 7.6111px rgb(0 157 181 / 6%), 0px 5.05275px 4.0422px rgb(0 157 181 / 4%);border-radius: 5.47059px;">
                                        <th
                                            style="padding: 18px 15px;border-top-left-radius: 8px;border-bottom-left-radius: 8px;text-align: left">
                                            <span style="color: #fff;">Description</span>
                                        </th>
                                        <th style="padding: 18px 15px;text-align: left"><span
                                                style="color: #fff;">Rate</span></th>
                                        <th style="padding: 18px 15px;text-align: left"><span
                                                style="color: #fff;">Qty</span></th>
                                        <th
                                            style="padding: 18px 15px;border-top-right-radius: 8px;border-bottom-right-radius: 8px;text-align: right">
                                            <span style="color: #fff;">Line Total</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        style="box-shadow: 0px 10.9412px 10.9412px rgb(0 157 181 / 4%), 0px 9.51387px 7.6111px rgb(0 157 181 / 6%), 0px 5.05275px 4.0422px rgb(0 157 181 / 4%);border-radius: 5.47059px;">
                                        <td style="padding: 18px 15px;display:flex;align-items: center;gap: 10px;"><span
                                                style="min-width: 7px;height: 7px;border: 4px solid #009DB5;background: #fff;border-radius: 100%;display: inline-block;"></span><span>Project</span>
                                        </td>
                                        <td style="padding: 18px 15px;"><span>$4,000.00</span></td>
                                        <td style="padding: 18px 15px;"> <span>1</span></td>
                                        <td style="padding: 18px 15px;text-align: right"><span>$4,000.00</span></td>
                                    </tr>
                                    <tr
                                        style="box-shadow: 0px 10.9412px 10.9412px rgb(0 157 181 / 4%), 0px 9.51387px 7.6111px rgb(0 157 181 / 6%), 0px 5.05275px 4.0422px rgb(0 157 181 / 4%);border-radius: 5.47059px;">
                                        <td style="padding: 18px 15px;display:flex;align-items: center;gap: 10px;"><span
                                                style="min-width: 7px;height: 7px;border: 4px solid #F94C8E;background: #fff;border-radius: 100%;display: inline-block;"></span><span>Creative
                                                Design</span></td>
                                        <td style="padding: 18px 15px;"> <span>$8,000.00</span></td>
                                        <td style="padding: 18px 15px;"> <span>2</span></td>
                                        <td style="padding: 18px 15px;text-align: right"> <span>$16,000.00</span></td>
                                    </tr>
                                    <tr
                                        style="box-shadow: 0px 10.9412px 10.9412px rgb(0 157 181 / 4%), 0px 9.51387px 7.6111px rgb(0 157 181 / 6%), 0px 5.05275px 4.0422px rgb(0 157 181 / 4%);border-radius: 5.47059px;">
                                        <td style="padding: 18px 15px;display:flex;align-items: center;gap: 10px;"><span
                                                style="min-width: 7px;height: 7px;border: 4px solid #F99B0D;background: #fff;border-radius: 100%;display: inline-block;"></span><span>Web
                                                Development</span></td>
                                        <td style="padding: 18px 15px;"> <span>$2,000.00</span></td>
                                        <td style="padding: 18px 15px;"> <span>2</span></td>
                                        <td style="padding: 18px 15px;text-align: right"> <span>$4,000.00</span></td>
                                    </tr>
                                    <tr
                                        style="box-shadow: 0px 10.9412px 10.9412px rgb(0 157 181 / 4%), 0px 9.51387px 7.6111px rgb(0 157 181 / 6%), 0px 5.05275px 4.0422px rgb(0 157 181 / 4%);border-radius: 5.47059px;">
                                        <td style="padding: 18px 15px;display:flex;align-items: center;gap: 10px;"><span
                                                style="min-width: 7px;height: 7px;border: 4px solid #83BF6E;background: #fff;border-radius: 100%;display: inline-block;"></span><span>Graphics
                                                Design</span></td>
                                        <td style="padding: 18px 15px;"> <span>$2,000.00</span></td>
                                        <td style="padding: 18px 15px;"> <span>1</span></td>
                                        <td style="padding: 18px 15px;text-align: right"> <span>$2,000.00</span></td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td> </td>
                                        <td style="padding: 5px 0; padding-top: 15px;"> <span
                                                style="color: var(--body-light-font-color);">Subtotal</span></td>
                                        <td style="padding: 5px 0;text-align: right;padding-top: 15px;">
                                            <span>$26,000.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td> </td>
                                        <td style="padding: 5px 0;padding-top: 0;"> <span
                                                style="color: var(--body-light-font-color);">Tax(5%)</span></td>
                                        <td style="padding: 5px 0;text-align: right;padding-top: 0;">
                                            <span>$1,000.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td> </td>
                                        <td style="padding: 10px 0;"> <span style="font-weight: 600;">Amount Due
                                                (USD)</span></td>
                                        <td style="padding: 10px 0;text-align: right"><span
                                                style="font-weight: 600;">$27,000.00</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
                <tr style="width: 100%; display: flex; justify-content: space-between; margin-top: 12px;">
                    <td class="p-0"><img src="{{ asset('assets/images/email-template/invoice-3/sign.png') }}"
                            alt="sign"><span
                            style="display:block;background: rgba(82, 82, 108, 0.3);height: 1px;width: 200px;margin-bottom:10px;"></span><span
                            style="color: rgba(82, 82, 108, 0.8);">Authorized Sign</span></td>
                    <td class="p-0"><span style="display: flex; justify-content: end; gap: 15px;"><a
                                style="background: #009DB5; color:rgba(255, 255, 255, 1);border-radius: 10px;padding: 18px 27px;font-size: 16px;font-weight: 600;outline: 0;border: 0; text-decoration: none;"
                                href="#!" onclick="window.print();">Print Invoice<i class="icon-arrow-right"
                                    style="font-size:13px;font-weight:bold; margin-left: 10px;"></i></a><a
                                style="background: #009DB533;color: #009DB5;border-radius: 10px;padding: 18px 27px;font-size: 16px;font-weight: 600;outline: 0;border: 0; text-decoration: none;"
                                href="{{ route('admin.invoice-1') }}" download="">Download<i class="icon-arrow-right"
                                    style="font-size:13px;font-weight:bold; margin-left: 10px;"></i></a></span></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/print.js') }}"></script>
@endsection