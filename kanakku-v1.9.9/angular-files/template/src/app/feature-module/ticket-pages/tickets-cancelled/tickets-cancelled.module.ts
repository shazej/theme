import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { TicketsCancelledRoutingModule } from './tickets-cancelled-routing.module';
import { TicketsCancelledComponent } from './tickets-cancelled.component';
import { SharedModule } from 'src/app/shared/shared.module';


@NgModule({
  declarations: [
    TicketsCancelledComponent
  ],
  imports: [
    CommonModule,
    TicketsCancelledRoutingModule,
    SharedModule
  ]
})
export class TicketsCancelledModule { }
