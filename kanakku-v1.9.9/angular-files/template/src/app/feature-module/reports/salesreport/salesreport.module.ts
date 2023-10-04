import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SalesreportRoutingModule } from './salesreport-routing.module';
import { SalesreportComponent } from './salesreport.component';
import { SharedModule } from 'src/app/shared/shared.module';

@NgModule({
  declarations: [SalesreportComponent],
  imports: [CommonModule, SalesreportRoutingModule, SharedModule],
})
export class SalesreportModule {}
