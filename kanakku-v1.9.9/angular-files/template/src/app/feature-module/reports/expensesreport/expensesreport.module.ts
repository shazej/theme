import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ExpensesreportRoutingModule } from './expensesreport-routing.module';
import { ExpensesreportComponent } from './expensesreport.component';
import { SharedModule } from 'src/app/shared/shared.module';

@NgModule({
  declarations: [ExpensesreportComponent],
  imports: [CommonModule, ExpensesreportRoutingModule, SharedModule],
})
export class ExpensesreportModule {}
