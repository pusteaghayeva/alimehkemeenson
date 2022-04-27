@extends('layouts.master')
@section('title', 'Məhkəmə aparatı')
@section('content')

    <div class="laws colleges">
        <h2 class="coll-title text-center">Azərbaycan Respublikasının hüquqi aktları</h2>
        <!-- Konstitusiya, məcəllə və qanunları bazadan çəkərək düzəltmək -->
        <a href="decision.html" class="article first d-flex align-items-center ">
            <img src="assets/img/gerb.png" alt="" class="coll-img">
            <span class="coll-text">Konstitusiya, Məcəllələr və Qanunlar</span>
        </a>
        <a href="https://president.az/az/documents/category/decrees" target="_blank" class="article second d-flex align-items-center ">
            <img src="assets/img/gerb.png" alt="" class="coll-img">
            <span class="coll-text">Fərman və Sərəncamlar</span>
        </a>
        <a href=" https://www.meclis.gov.az/cat-qanun.php?cat=72&lang=az" target="_blank" class="article first d-flex align-items-center ">
            <img src="assets/img/gerb.png" alt="" class="coll-img">
            <span class="coll-text">Milli Məclisin Qərarları</span>
        </a>

        <a href="http://www.constcourt.gov.az/az/decisions" target="_blank" class="article second d-flex align-items-center ">
            <img src="assets/img/gerb.png" alt="" class="coll-img">
            <span class="coll-text">Konstitusiya Məhkəməsinin Qərarları</span>
        </a>

        <a href=" http://supremecourt.gov.az/category/view/16" target="_blank" class="article second d-flex align-items-center ">
            <img src="assets/img/gerb.png" alt="" class="coll-img">
            <span class="coll-text">Ali Məhkəmənin Plenum Qərarları</span>
        </a>
        <a href="http://huquqiaktlar.nakhchivan.az/Akts.aspx" target="_blank" class="article second d-flex align-items-center ">
            <img src="assets/img/gerb.png" alt="" class="coll-img">
            <span class="coll-text">Naxçıvan Muxtar Respublikasının hüquqi aktları</span>
        </a>

    </div>


@endsection
