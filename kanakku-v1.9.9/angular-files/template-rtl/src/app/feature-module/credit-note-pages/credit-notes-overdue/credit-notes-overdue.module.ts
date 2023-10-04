import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { CreditNotesOverdueRoutingModule } from './credit-notes-overdue-routing.module';
import { CreditNotesOverdueComponent } from './credit-notes-overdue.component';
import { SharedModule } from 'src/app/shared/shared.module';


@NgModule({
  declarations: [
    CreditNotesOverdueComponent
  ],
  imports: [
    CommonModule,
    CreditNotesOverdueRoutingModule,
    SharedModule
  ]
})
export class CreditNotesOverdueModule { }
