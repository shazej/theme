import { HttpClientModule, HTTP_INTERCEPTORS } from '@angular/common/http';
import { NgModule } from '@angular/core';

import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { MaterialModule } from './material/material.module';
import { NgxBootstrapModule } from './ngx-bootstrap/ngx-bootstrap.module';
import { NgApexchartsModule } from 'ng-apexcharts';
import { PaginationModule } from '../feature-module/common/pagination/pagination.module';
import { NgxMaskModule } from 'ngx-mask';
import { NgChartsModule } from 'ng2-charts';
import { ChartModule } from 'primeng/chart';
import { FullCalendarModule } from '@fullcalendar/angular';
import { AngularEditorModule } from '@kolkov/angular-editor';
import { SpinnerInterceptor } from '../core/interceptor/spinner/spinner.interceptor';
import { NgxDropzoneModule } from 'ngx-dropzone';
import { LightboxModule } from 'ngx-lightbox';



@NgModule({
  imports: [
    FormsModule,
    ReactiveFormsModule,
    HttpClientModule,
    CommonModule,
    MaterialModule,
    NgApexchartsModule,
    NgxBootstrapModule,
    PaginationModule,
    NgxMaskModule.forRoot({
      showMaskTyped: false,
    }),
    NgChartsModule.forRoot(),
    ChartModule,
    FullCalendarModule,
    AngularEditorModule,
    NgxDropzoneModule,
    LightboxModule,
    
   
   
  ],
  exports: [
    FormsModule,
    ReactiveFormsModule,
    HttpClientModule,
    CommonModule,
    MaterialModule,
    NgApexchartsModule,
    NgxBootstrapModule,
    PaginationModule,
    NgxMaskModule,
    NgChartsModule,
    ChartModule,
    FullCalendarModule,
    AngularEditorModule,
    NgxDropzoneModule,
    LightboxModule,
    
    
  ],
  providers: [
    { provide: HTTP_INTERCEPTORS, useClass: SpinnerInterceptor, multi: true },
  ],
})
export class SharedModule {}
