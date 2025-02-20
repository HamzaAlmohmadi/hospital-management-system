@extends('WebSite.layouts.master') {{-- استخدام التخطيط الرئيسي للموقع --}}

@section('title', 'الصفحة الرئيسية') {{-- تعيين عنوان الصفحة --}}

@section('content') {{-- بداية قسم المحتوى --}}

    @include('WebSite.home.sections.main-slider') {{-- شريط التمرير الرئيسي في أعلى الصفحة --}}
    
    @include('WebSite.home.sections.about') {{-- قسم "من نحن" أو معلومات عن المؤسسة --}}
    
    @include('WebSite.home.sections.featured') {{-- قسم الميزات المميزة أو الخدمات --}}
    
    @include('WebSite.home.sections.department') {{-- قسم الأقسام الطبية أو التخصصات --}}
    
    @include('WebSite.home.sections.team') {{-- قسم فريق العمل أو الأطباء --}}
    
    @include('WebSite.home.sections.video') {{-- قسم الفيديو التعريفي --}}
    
    @include('WebSite.home.sections.appointment') {{-- قسم حجز المواعيد --}}
    
    @include('WebSite.home.sections.testimonial') {{-- قسم آراء المرضى أو العملاء --}}
    
    @include('WebSite.home.sections.counter') {{-- قسم الإحصائيات أو الأرقام المهمة --}}
    
    @include('WebSite.home.sections.doctor-info') {{-- قسم معلومات إضافية عن الأطباء --}}
    
    @include('WebSite.home.sections.news') {{-- قسم الأخبار أو المقالات --}}
    
    @include('WebSite.home.sections.clients') {{-- قسم العملاء أو الشعارات --}}

@endsection {{-- نهاية قسم المحتوى --}}













