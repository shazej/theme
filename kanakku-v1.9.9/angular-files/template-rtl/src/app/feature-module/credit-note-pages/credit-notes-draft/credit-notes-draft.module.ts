import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { CreditNotesDraftRoutingModule } from './credit-notes-draft-routing.module';
import { CreditNotesDraftComponent } from './credit-notes-draft.component';
import { SharedModule } from 'src/app/shared/shared.module';


@NgModule({
  declarations: [
    CreditNotesDraftComponent
  ],
  imports: [
    CommonModule,
    CreditNotesDraftRoutingModule,
    SharedModule
  ]
})
export class CreditNotesDraftModule { }
