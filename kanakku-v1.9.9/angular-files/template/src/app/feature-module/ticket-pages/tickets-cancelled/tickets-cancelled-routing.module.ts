import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { TicketsCancelledComponent } from './tickets-cancelled.component';

const routes: Routes = [{ path: '', component: TicketsCancelledComponent }];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class TicketsCancelledRoutingModule { }
