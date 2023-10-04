import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CreditNotesCancelledRoutingModule } from './credit-notes-cancelled-routing.module';
import { CreditNotesCancelledComponent } from './credit-notes-cancelled.component';
import { SharedModule } from 'src/app/shared/shared.module';



@NgModule({
  declarations: [
    CreditNotesCancelledComponent
  ],
  imports: [
    CommonModule,
    CreditNotesCancelledRoutingModule,
    SharedModule
  
    
  ]
})
export class CreditNotesCancelledModule { }
