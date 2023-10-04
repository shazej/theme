import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { TicketsListCancelledRoutingModule } from './tickets-list-cancelled-routing.module';
import { TicketsListCancelledComponent } from './tickets-list-cancelled.component';
import { SharedModule } from 'src/app/shared/shared.module';


@NgModule({
  declarations: [
    TicketsListCancelledComponent
  ],
  imports: [
    CommonModule,
    TicketsListCancelledRoutingModule,
    SharedModule
  ]
})
export class TicketsListCancelledModule { }
