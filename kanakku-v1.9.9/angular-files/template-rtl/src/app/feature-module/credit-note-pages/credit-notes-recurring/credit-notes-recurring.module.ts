import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { CreditNotesRecurringRoutingModule } from './credit-notes-recurring-routing.module';
import { CreditNotesRecurringComponent } from './credit-notes-recurring.component';
import { SharedModule } from 'src/app/shared/shared.module';


@NgModule({
  declarations: [
    CreditNotesRecurringComponent
  ],
  imports: [
    CommonModule,
    CreditNotesRecurringRoutingModule,
    SharedModule
  ]
})
export class CreditNotesRecurringModule { }
