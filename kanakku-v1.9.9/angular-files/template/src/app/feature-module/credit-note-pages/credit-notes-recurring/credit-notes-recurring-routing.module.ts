import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CreditNotesRecurringComponent } from './credit-notes-recurring.component';

const routes: Routes = [{ path: '', component: CreditNotesRecurringComponent }];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class CreditNotesRecurringRoutingModule { }
