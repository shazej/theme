import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TaxsreportRoutingModule } from './taxsreport-routing.module';
import { TaxsreportComponent } from './taxsreport.component';
import { SharedModule } from 'src/app/shared/shared.module';

@NgModule({
  declarations: [TaxsreportComponent],
  imports: [CommonModule, TaxsreportRoutingModule, SharedModule],
})
export class TaxsreportModule {}
