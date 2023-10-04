import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { CreditNotesPendingRoutingModule } from './credit-notes-pending-routing.module';
import { CreditNotesPendingComponent } from './credit-notes-pending.component';
import { SharedModule } from 'src/app/shared/shared.module';


@NgModule({
  declarations: [
    CreditNotesPendingComponent
  ],
  imports: [
    CommonModule,
    CreditNotesPendingRoutingModule,
    SharedModule
  ]
})
export class CreditNotesPendingModule { }
