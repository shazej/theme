import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { TicketsDraftRoutingModule } from './tickets-draft-routing.module';
import { TicketsDraftComponent } from './tickets-draft.component';
import { SharedModule } from 'src/app/shared/shared.module';


@NgModule({
  declarations: [
    TicketsDraftComponent
  ],
  imports: [
    CommonModule,
    TicketsDraftRoutingModule,
    SharedModule
  ]
})
export class TicketsDraftModule { }
