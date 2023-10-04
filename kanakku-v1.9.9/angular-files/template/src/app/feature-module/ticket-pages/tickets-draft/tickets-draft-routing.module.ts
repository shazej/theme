import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { TicketsDraftComponent } from './tickets-draft.component';

const routes: Routes = [{ path: '', component: TicketsDraftComponent }];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class TicketsDraftRoutingModule { }
