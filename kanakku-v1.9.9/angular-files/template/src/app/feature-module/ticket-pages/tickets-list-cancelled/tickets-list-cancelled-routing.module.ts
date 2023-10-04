import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { TicketsListCancelledComponent } from './tickets-list-cancelled.component';

const routes: Routes = [{ path: '', component: TicketsListCancelledComponent }];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class TicketsListCancelledRoutingModule { }
