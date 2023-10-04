import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ProfitlossreportRoutingModule } from './profitlossreport-routing.module';
import { ProfitlossreportComponent } from './profitlossreport.component';
import { SharedModule } from 'src/app/shared/shared.module';

@NgModule({
  declarations: [ProfitlossreportComponent],
  imports: [CommonModule, ProfitlossreportRoutingModule, SharedModule],
})
export class ProfitlossreportModule {}
