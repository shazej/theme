import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { TicketsListRecurringRoutingModule } from './tickets-list-recurring-routing.module';
import { TicketsListRecurringComponent } from './tickets-list-recurring.component';


@NgModule({
  declarations: [
    TicketsListRecurringComponent
  ],
  imports: [
    CommonModule,
    TicketsListRecurringRoutingModule
  ]
})
export class TicketsListRecurringModule { }
